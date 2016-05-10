<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Cart.Content.Create';
    protected $permissionDelete = 'Cart.Content.Delete';
    protected $permissionEdit   = 'Cart.Content.Edit';
    protected $permissionView   = 'Cart.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->load->model('cart/cart_model');
        $this->lang->load('cart');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('cart', 'cart.js');
    }

    /**
     * Display a list of Cart data.
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
                    $deleted = $this->cart_model->delete($pid);
                    if ($deleted == false) {
                        $result = false;
                    }
                }
                if ($result) {
                    Template::set_message(count($checked) . ' ' . lang('cart_delete_success'), 'success');
                } else {
                    Template::set_message(lang('cart_delete_failure') . $this->cart_model->error, 'error');
                }
            }
        }
        
        
        
        $records = $this->cart_model->find_all();

        Template::set('records', $records);
        
    Template::set('toolbar_title', lang('cart_manage'));

        Template::render();
    }
    
    /**
     * Create a Cart object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        
        if (isset($_POST['save'])) {
            if ($insert_id = $this->save_cart()) {
                log_activity($this->auth->user_id(), lang('cart_act_create_record') . ': ' . $insert_id . ' : ' . $this->input->ip_address(), 'cart');
                Template::set_message(lang('cart_create_success'), 'success');

                redirect(SITE_AREA . '/content/cart');
            }

            // Not validation error
            if ( ! empty($this->cart_model->error)) {
                Template::set_message(lang('cart_create_failure') . $this->cart_model->error, 'error');
            }
        }

        Template::set('toolbar_title', lang('cart_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Cart data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('cart_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/cart');
        }
        
        if (isset($_POST['save'])) {
            $this->auth->restrict($this->permissionEdit);

            if ($this->save_cart('update', $id)) {
                log_activity($this->auth->user_id(), lang('cart_act_edit_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'cart');
                Template::set_message(lang('cart_edit_success'), 'success');
                redirect(SITE_AREA . '/content/cart');
            }

            // Not validation error
            if ( ! empty($this->cart_model->error)) {
                Template::set_message(lang('cart_edit_failure') . $this->cart_model->error, 'error');
            }
        }
        
        elseif (isset($_POST['delete'])) {
            $this->auth->restrict($this->permissionDelete);

            if ($this->cart_model->delete($id)) {
                log_activity($this->auth->user_id(), lang('cart_act_delete_record') . ': ' . $id . ' : ' . $this->input->ip_address(), 'cart');
                Template::set_message(lang('cart_delete_success'), 'success');

                redirect(SITE_AREA . '/content/cart');
            }

            Template::set_message(lang('cart_delete_failure') . $this->cart_model->error, 'error');
        }
        
        Template::set('cart', $this->cart_model->find($id));

        Template::set('toolbar_title', lang('cart_edit_heading'));
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
    private function save_cart($type = 'insert', $id = 0)
    {
        if ($type == 'update') {
            $_POST['CART_ID'] = $id;
        }

        // Validate the data
        $this->form_validation->set_rules($this->cart_model->get_validation_rules());
        if ($this->form_validation->run() === false) {
            return false;
        }

        // Make sure we only pass in the fields we want
        
        $data = $this->cart_model->prep_data($this->input->post());

        // Additional handling for default values should be added below,
        // or in the model's prep_data() method
        

        $return = false;
        if ($type == 'insert') {
            $id = $this->cart_model->insert($data);

            if (is_numeric($id)) {
                $return = $id;
            }
        } elseif ($type == 'update') {
            $return = $this->cart_model->update($id, $data);
        }

        return $return;
    }
}