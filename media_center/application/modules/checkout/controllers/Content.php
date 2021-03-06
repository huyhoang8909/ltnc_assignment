<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Content controller
 */
class Content extends Admin_Controller
{
    protected $permissionCreate = 'Checkout.Content.Create';
    protected $permissionDelete = 'Checkout.Content.Delete';
    protected $permissionEdit   = 'Checkout.Content.Edit';
    protected $permissionView   = 'Checkout.Content.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->auth->restrict($this->permissionView);
        $this->lang->load('checkout');
        
            $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");
        
        Template::set_block('sub_nav', 'content/_sub_nav');

        Assets::add_module_js('checkout', 'checkout.js');
    }

    /**
     * Display a list of Checkout data.
     *
     * @return void
     */
    public function index()
    {
        
        
        
        
        
        Template::set('toolbar_title', lang('checkout_manage'));

        Template::render();
    }
    
    /**
     * Create a Checkout object.
     *
     * @return void
     */
    public function create()
    {
        $this->auth->restrict($this->permissionCreate);
        

        Template::set('toolbar_title', lang('checkout_action_create'));

        Template::render();
    }
    /**
     * Allows editing of Checkout data.
     *
     * @return void
     */
    public function edit()
    {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('checkout_invalid_id'), 'error');

            redirect(SITE_AREA . '/content/checkout');
        }
        
        
        

        Template::set('toolbar_title', lang('checkout_edit_heading'));
        Template::render();
    }
}