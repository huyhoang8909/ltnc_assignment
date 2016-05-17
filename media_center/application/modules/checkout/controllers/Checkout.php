<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Checkout controller
 */
class Checkout extends Front_Controller
{
    protected $permissionCreate = 'Checkout.Checkout.Create';
    protected $permissionDelete = 'Checkout.Checkout.Delete';
    protected $permissionEdit   = 'Checkout.Checkout.Edit';
    protected $permissionView   = 'Checkout.Checkout.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('cart/cart_model');
        $this->lang->load('checkout');
        
        

        Assets::add_module_js('checkout', 'checkout.js');
    }

    /**
     * Display a list of Checkout data.
     *
     * @return void
     */
    public function index()
    {
        $cart_id = $this->session->userdata('cart_id');
        $records = $this->cart_model->where('cart.CART_ID', $cart_id)
            ->find_all();

        if (empty($records)) redirect('/');

        Template::set('records', $records);
        Template::render();
    }
    
}