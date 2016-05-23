<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Item.Content.Create';
    protected $permissionDelete = 'Item.Content.Delete';
    protected $permissionEdit   = 'Item.Content.Edit';
    protected $permissionView   = 'Item.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('item/item_model');
        $this->lang->load('item');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('item', 'item.js');
    }

    /**
     * Display a list of Item data.
     *
     * @return void
     */
    public function index($offset = 0)
    {
        // Deleting anything?
        if (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);
            $checked = $this->input->post('checked');
            if (is_array($checked) && count($checked)) {

                // If any of the deletions fail, set the result to false, so
                // failure message is set if any of the attempts fail, not just
                // the last attempt

                $result = true;
                foreach ($checked as $pid) {
                    $deleted = $this->item_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('item_delete_success'), 'success');
                } else {
                    Template::set_message(lang('item_delete_failure') . $this->item_model->error, 'error');
                }
            }
        }
        $pagerUriSegment = 5;
        $pagerBaseUrl = site_url(SITE_AREA . '/content/item/index') . '/';
        
        $limit  = $this->settings_lib->item('site.list_limit') ?: 15;

        $this->load->library('pagination');
        $pager['base_url']    = $pagerBaseUrl;
        $pager['total_rows']  = $this->item_model->count_all();
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;

        $this->pagination->initialize($pager);
        $this->item_model->limit($limit, $offset);
        
        $records = $this->item_model->find_all();

        Template::set('records', $records);
        
    Template::set('toolbar_title', lang('item_manage'));

        Template::render();
    }
    
    /**
     * Create a Item object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_item()) {
                log_activity($this->auth->user_id(), lang('item_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'item');
                Template::set_message(lang('item_create_success'), 'success');

                redirect(SITE_AREA . '/content/item');
            }

            // Not validation error
            if ( ! empty($this->item_model->error)) {
                Template::set_message(lang('item_create_failure') . $this->item_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('item_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Item data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('item_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/item');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_item('update', $id)) {
                log_activity($this->auth->user_id(), lang('item_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'item');
                Template::set_message(lang('item_edit_success'), 'success');
                redirect(SITE_AREA . '/content/item');
            }

            // Not validation error
            if ( ! empty($this->item_model->error)) {
                Template::set_message(lang('item_edit_failure') . $this->item_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->item_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('item_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'item');
                Template::set_message(lang('item_delete_success'), 'success');

                redirect(SITE_AREA . '/content/item');
            }

            Template::set_message(lang('item_delete_failure') . $this->item_model->error, 'error');
        }
        
        Template::set('item', $this->item_model->find($id));

        Template::set('toolbar_title', lang('item_edit_heading'));
        Template::render();
    }

    //--------------------------------------------------------------------------
    // !PRIVATE METHODS
    //--------------------------------------------------------------------------

    /**
     * Save the data.
     *
     * @param string $type Either 'insert' or 'update'.
     * @param int    $id   The ID of the record to update, ignored on inserts.
     *
     * @return boolean|integer An ID for successful inserts, true for successful
     * updates, else false.
     */
    private function save_item($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['ITEM_ID'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->item_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->item_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->item_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->item_model->update($id, $data);
        }

        return $return;
    }
}