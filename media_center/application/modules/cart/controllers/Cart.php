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

    protected $require_authentication = true;

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
        $records = $this->cart_model->where('cart.USER_ID', $this->current_user->id)
            ->find_all();

        Template::set('records', $records);
        Template::render();
    }

    public function add($id)
    {
        if ($this->auth->is_logged_in()) {
            //insert to db with item and user
            $cart_id = $this->cart_model->create_cart($this->current_user->id, $id);
            redirect('/cart');
        } else {
        
            $records = $this->cart_model->find_all();
            redirect('/login');
        }
    }

    public function delete($item)
    {
        $records = $this->cart_model->find_all();

        Template::set('records', $records);
        

        Template::render();
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