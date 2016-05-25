<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Order controller
 */
class Order extends Front_Controller
{
    protected $permissionCreate = 'Order.Order.Create';
    protected $permissionDelete = 'Order.Order.Delete';
    protected $permissionEdit   = 'Order.Order.Edit';
    protected $permissionView   = 'Order.Order.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('order/order_model');
        $this->lang->load('order');
        
            Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
            Assets::add_js('jquery-ui-1.8.13.min.js');
            Assets::add_css('jquery-ui-timepicker.css');
            Assets::add_js('jquery-ui-timepicker-addon.js');
        

        Assets::add_module_js('order', 'order.js');
    }

    /**
     * Display a list of Order data.
     *
     * @return void
     */
    public function index()
    {
        
        $this->load->model('item_model');
        $this->load->model('category_model');
        $this->load->library('users/auth');
        
        
          $top_categories = $this->category_model->get_top_categories(array());
        $all_categories = $this->category_model->get_all_categories(array('limit' => 11));
        $new_item = $this->item_model->get_new_items(4);
        $sale_item = $this->item_model->sale_item(4);
        $common_item = $this->item_model->common_item(4);

        $products = $this->item_model->get_items_by_categories($top_categories);
        $data = array(
            'products' => $products,
            'new_item' => $new_item,
            'sale_item' => $sale_item,
            'common_item' => $common_item,
            'more_items' => $this->item_model->get_more_items(1),
            'top_items' => $products,
            'all_categories' => $all_categories
        );
        
        
        $this->load->library('users/auth');
        
        if ($this->auth->is_logged_in()) {
            $records = $this->order_model->get_order_items(array('USER_ID' => $this->auth->user()->id));

            $this->set_current_user();

            Template::set('records', $records);
            Template::set('data', $data);
            Template::render();
        } else {
            redirect('/login');
        }

    }

    public function delete($id)
    {
        $this->load->library('users/auth');
        
        if ($this->auth->is_logged_in()) {
            //delete order
            $records = $this->order_model->delete_order($id);
            redirect('/order');
        } else {
            redirect('/login');
        }

    }
    
}