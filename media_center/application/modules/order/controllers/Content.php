<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Order.Content.Create';
    protected $permissionDelete = 'Order.Content.Delete';
    protected $permissionEdit   = 'Order.Content.Edit';
    protected $permissionView   = 'Order.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('order/order_model');
        $this->lang->load('order');
        
            Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
            Assets::add_js('jquery-ui-1.8.13.min.js');
            Assets::add_css('jquery-ui-timepicker.css');
            Assets::add_js('jquery-ui-timepicker-addon.js');
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('order', 'order.js');
    }

    /**
     * Display a list of Order data.
     *
     * @return void
     */
    public function index()
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
                    $deleted = $this->order_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('order_delete_success'), 'success');
                } else {
                    Template::set_message(lang('order_delete_failure') . $this->order_model->error, 'error');
                }
            }
        }
        
        $records = $this->order_model->find_all();

        Template::set('records', $records);
        
        Template::set('toolbar_title', lang('order_manage'));

        Template::render();
    }
    
    /**
     * Create a Order object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_order()) {
                log_activity($this->auth->user_id(), lang('order_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'order');
                Template::set_message(lang('order_create_success'), 'success');

                redirect(SITE_AREA . '/content/order');
            }

            // Not validation error
            if ( ! empty($this->order_model->error)) {
                Template::set_message(lang('order_create_failure') . $this->order_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('order_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Order data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('order_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/order');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_order('update', $id)) {
                log_activity($this->auth->user_id(), lang('order_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'order');
                Template::set_message(lang('order_edit_success'), 'success');
                redirect(SITE_AREA . '/content/order');
            }

            // Not validation error
            if ( ! empty($this->order_model->error)) {
                Template::set_message(lang('order_edit_failure') . $this->order_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->order_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('order_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'order');
                Template::set_message(lang('order_delete_success'), 'success');

                redirect(SITE_AREA . '/content/order');
            }

            Template::set_message(lang('order_delete_failure') . $this->order_model->error, 'error');
        }
        
        Template::set('order', $this->order_model->find($id));

        Template::set('toolbar_title', lang('order_edit_heading'));
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
    private function save_order($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['ORDER_ID'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->order_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->order_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        
		$data['ORDER_DATE']	= $this->input->post('ORDER_DATE') ? $this->input->post('ORDER_DATE') : '0000-00-00 00:00:00';
		$data['DELIVERY_DATE']	= $this->input->post('DELIVERY_DATE') ? $this->input->post('DELIVERY_DATE') : '0000-00-00 00:00:00';

        $return = false;
        if ($type == 'insert') {
            $id = $this->order_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->order_model->update($id, $data);
        }

        return $return;
    }
}