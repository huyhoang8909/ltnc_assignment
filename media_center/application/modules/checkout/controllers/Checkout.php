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
        $this->load->helper('string');

        if($this->input->method(TRUE) === 'POST') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Full Name', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
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
                // create a user if required
                if ($this->input->post('create-account')) {

                    $this->load->model('users/user_model');
                    $this->load->library('users/auth');

                    $data = $this->user_model->prep_data($this->input->post());
                    $activationMethod = $this->settings_lib->item('auth.user_activation_method');
                    if ($activationMethod == 0) {
                        // No activation method, so automatically activate the user.
                        $data['active'] = 1;
                    }
                    $data['password'] = random_string('alnum', 5);
                    $userId = $this->user_model->insert($data);

                    if (is_numeric($userId)) {
                        // User Activation
                        $activation = $this->user_model->set_activation($userId);
                        $message = $activation['message'];
                        $error   = $activation['error'];

                        Template::set_message($message, $error ? 'error' : 'success');

                        log_activity($userId, lang('us_log_register'), 'users');

                        // send mail
                        $this->load->library('emailer/emailer');
                        $data = array(
                            'to'        => $this->user_model->find($user_id)->email,
                            'subject'   => 'Account Infomation',
                            'message'   => 'hello',
                        );

                        $this->emailer->send($data);
                    }
                }

                //flash message
                $this->session->set_flashdata('message', 'success::Your order has completed! You can view this order
                    <a href="/order" class="alert-link">here</a>');
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