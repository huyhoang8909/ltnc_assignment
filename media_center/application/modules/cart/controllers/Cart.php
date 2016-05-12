<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Cart controller
 */
class Cart extends Front_Controller
{
    protected $permissionCreate = 'Cart.Cart.Create';
    protected $permissionDelete = 'Cart.Cart.Delete';
    protected $permissionEdit   = 'Cart.Cart.Edit';
    protected $permissionView   = 'Cart.Cart.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('cart/cart_model');
        $this->lang->load('cart');

        Assets::add_module_js('cart', 'cart.js');
    }

    /**
     * Display a list of Cart data.
     *
     * @return void
     */
    public function index()
    {
        $cart_id = $this->session->userdata('cart_id');

        if ($cart_id) {
            $records = $this->cart_model->where('cart.CART_ID', $cart_id)
                ->find_all();
             $cart_price = $this->cart_model
                        ->select('SUM(ITEM_PRICE) AS TOTAL_PRICE')
                        ->where('cart.CART_ID', $cart_id)
                        ->find_all();

            $this->session->set_userdata('cart', $records);
            $this->session->set_userdata('total_price', $cart_price[0]->TOTAL_PRICE);
        }

        Template::set('records', isset($records) ? $records : []);

        Template::render();
    }

    public function add($id)
    {
        //insert to db with item and user
        $cart_id = $this->cart_model->create_cart($id, $this->session->userdata('cart_id'));
        $this->session->set_userdata('cart_id', $cart_id);
        redirect('/cart');
    }

    public function delete($item_id)
    {
        $records = $this->db->delete('cart_item', array('ITEM_ID' => $item_id));
        redirect('/cart');
    }

    public function reduce($item)
    {
        $records = $this->cart_model->find_all();

        Template::set('records', $records);
        

        Template::render();
    }

        public function increase()
    {
        $records = $this->cart_model->find_all();

        Template::set('records', $records);
        

        Template::render();
    }
    
}