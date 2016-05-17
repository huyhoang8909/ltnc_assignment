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
        $this->load->helper('form');

        if($this->input->method(TRUE) === 'POST') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Full Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'required|is_natural|min_length[10]|max_length[11]');

            if ($this->form_validation->run() == FALSE) {
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

                $cart_id = $this->session->userdata('cart_id');
                $records = $this->cart_model->where('cart.CART_ID', $cart_id)
                ->find_all();

                if (empty($records)) redirect('/');

                Template::set('records', $records);
                Template::render();
            } else {
                //flash message
                $this->session->set_flashdata('message', 'success::Your order has completed! You can view this order
                    <a href="#" class="alert-link">here</a>');
                // redirect to home
                redirect('/');
            }
        } else {
            $cart_id = $this->session->userdata('cart_id');
            $records = $this->cart_model->where('cart.CART_ID', $cart_id)
                ->find_all();

            if (empty($records)) redirect('/');

            Template::set('records', $records);
            Template::render();
        }
    }

    public function complete()
    {

    }
    
}