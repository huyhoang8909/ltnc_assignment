<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Reports controller
 */
class Reports extends Admin_Controller {

    protected $permissionCreate = 'Checkout.Reports.Create';
    protected $permissionDelete = 'Checkout.Reports.Delete';
    protected $permissionEdit = 'Checkout.Reports.Edit';
    protected $permissionView = 'Checkout.Reports.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();

        $this->auth->restrict($this->permissionView);
        $this->lang->load('checkout');

        $this->form_validation->set_error_delimiters("<span class='error'>", "</span>");

        Template::set_block('sub_nav', 'reports/_sub_nav');

        Assets::add_module_js('checkout', 'checkout.js');
    }

    /**
     * Display a list of Checkout data.
     *
     * @return void
     */
    public function index() {
        $this->load->model('item_model');
        $this->load->model('category_model');
        $this->load->library('users/auth');
      

        $top_categories = $this->category_model->get_top_categories(array());
        $all_categories = $this->category_model->get_all_categories(array('limit' => 11));
        $new_item = $this->item_model->get_new_items(4);
        $sale_item = $this->item_model->sale_item(4);
        $common_item = $this->item_model->common_item(4);
        $parent_category = $this->category_model->get_parent_category(array());

        $products = $this->item_model->get_items_by_categories($top_categories);
        $data = array(
            'products' => $products,
            'new_item' => $new_item,
            'sale_item' => $sale_item,
            'common_item' => $common_item,
            'more_items' => $this->item_model->get_more_items(1),
            'top_items' => $products,
            'all_categories' => $all_categories,
            'parent' => $parent_category
        );
        Template::set('data', $data);
        





        Template::set('toolbar_title', lang('checkout_manage'));

        Template::render();
    }

    /**
     * Create a Checkout object.
     *
     * @return void
     */
    public function create() {
        $this->auth->restrict($this->permissionCreate);


        Template::set('toolbar_title', lang('checkout_action_create'));

        Template::render();
    }

    /**
     * Allows editing of Checkout data.
     *
     * @return void
     */
    public function edit() {
        $id = $this->uri->segment(5);
        if (empty($id)) {
            Template::set_message(lang('checkout_invalid_id'), 'error');

            redirect(SITE_AREA . '/reports/checkout');
        }




        Template::set('toolbar_title', lang('checkout_edit_heading'));
        Template::render();
    }

}
