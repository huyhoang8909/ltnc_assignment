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
        $this->load->library('users/auth');
        
        if ($this->auth->is_logged_in()) {
            $records = $this->order_model->where('USER_ID', $this->auth->user()->id)->find_all();

            Template::set('records', $records);
            Template::render();
        } else {
            redirect('/login');
        }

    }
    
}