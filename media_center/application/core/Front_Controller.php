<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Front Controller
 *
 * This class provides a common place to handle any tasks that need to
 * be done for all public-facing controllers.
 *
 * @package    Bonfire\Core\Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Front_Controller extends Base_Controller
{

    //--------------------------------------------------------------------

    /**
     * Class constructor
     *
     */
    public function __construct()
    {
        parent::__construct();

        Events::trigger('before_front_controller');

        $this->load->library('template');
        $this->load->library('assets');

        $this->set_current_user();
        if (class_exists('Auth', false)) {
            if ($this->auth->is_logged_in()) {
                $this->load->model('cart/cart_model');
                $cart = $this->cart_model
                    ->where('cart.USER_ID', $this->current_user->id)
                    ->find_all();
                $cart_price = $this->cart_model
                    ->select('SUM(ITEM_PRICE) AS TOTAL_PRICE')
                    ->where('cart.USER_ID', $this->current_user->id)
                    ->find_all();

                $this->session->set_userdata('cart', $cart);
                $this->session->set_userdata('total_price', $cart_price[0]->TOTAL_PRICE);
            }
        }

        Events::trigger('after_front_controller');
    }//end __construct()

    //--------------------------------------------------------------------

}

/* End of file Front_Controller.php */
/* Location: ./application/core/Front_Controller.php */