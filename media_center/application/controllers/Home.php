<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Home extends MX_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('application');
        $this->load->library('Template');
        $this->load->library('Assets');
        $this->lang->load('application');
        $this->load->library('events');

        $this->load->library('installer_lib');
        if (!$this->installer_lib->is_installed()) {
            $ci = & get_instance();
            $ci->hooks->enabled = false;
            redirect('install');
        }

        // Make the requested page var available, since
        // we're not extending from a Bonfire controller
        // and it's not done for us.
        $this->requested_page = isset($_SESSION['requested_page']) ? $_SESSION['requested_page'] : null;
    }

    public function search($q = null) {
        $this->load->model('item_model');
        $this->load->model('category_model');
        $key = $this->input->get('q');
        $s_products = array();
        if ($key) {
            $s_products = $this->item_model->search($key);
        }

        $this->load->library('users/auth');
        $this->set_current_user();

        if ($cart_id = $this->session->userdata('cart_id')) {
            $cart = $this->cart_model
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();
            $cart_price = $this->cart_model
                    ->select('SUM(ITEM_PRICE) AS TOTAL_PRICE')
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();

            $this->session->set_userdata('cart', $cart);
            $this->session->set_userdata('total_price', $cart_price[0]->TOTAL_PRICE);
        }

        $top_categories = $this->category_model->get_top_categories(array());
        $all_categories = $this->category_model->get_all_categories(array());
        $new_item = $this->item_model->get_new_items(5);
        $sale_item = $this->item_model->sale_item(5);
        $common_item = $this->item_model->common_item(5);

        $products = $this->item_model->get_items_by_categories($top_categories);
        $data = array(
            'products' => $products,
            's_products' => $s_products,
            'sale_item' => $sale_item,
            'new_item' => $new_item,
            'common_item' => $common_item,
            'more_items' => $this->item_model->get_more_items(1),
            'top_items' => $products,
            'all_categories' => $all_categories
        );
        Template::set('data', $data);
        Template::render();
    }

    //--------------------------------------------------------------------

    
     /**
     * Displays the homepage of the Bonfire app
     *
     * @return void
     */
    public function new_products() {
        $this->load->model('item_model');
        $this->load->model('category_model');
        $this->load->library('users/auth');
        $this->set_current_user();

        if ($cart_id = $this->session->userdata('cart_id')) {
            $this->load->model('cart/cart_model');
            $cart = $this->cart_model
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();
            $cart_price = $this->cart_model
                    ->select('SUM(ITEM_PRICE) AS TOTAL_PRICE')
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();

            $this->session->set_userdata('cart', $cart);
            $this->session->set_userdata('total_price', $cart_price[0]->TOTAL_PRICE);
        }

        $top_categories = $this->category_model->get_top_categories(array());
        $all_categories = $this->category_model->get_all_categories(array());
        $new_item = $this->item_model->get_new_items(4);
        $sale_item = $this->item_model->sale_item(4);
        $common_item = $this->item_model->common_item(4);

        $products = $this->item_model->get_items_by_categories($top_categories);
        
        $new_products = $this->item_model->get_new_items(array());

        $data = array(
            'products' => $products,
            'new_item' => $new_item,
            'new_products' => $new_products,
            'sale_item' => $sale_item,
            'common_item' => $common_item,
            'more_items' => $this->item_model->get_more_items(1),
            'top_items' => $products,
            'all_categories' => $all_categories
        );
        Template::set('data', $data);
        Template::render();
    }

    
    /**
     * Displays the homepage of the Bonfire app
     *
     * @return void
     */
    public function index() {
        $this->load->model('item_model');
        $this->load->model('category_model');
        $this->load->library('users/auth');
        $this->set_current_user();

        if ($cart_id = $this->session->userdata('cart_id')) {
            $this->load->model('cart/cart_model');
            $cart = $this->cart_model
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();
            $cart_price = $this->cart_model
                    ->select('SUM(ITEM_PRICE) AS TOTAL_PRICE')
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();

            $this->session->set_userdata('cart', $cart);
            $this->session->set_userdata('total_price', $cart_price[0]->TOTAL_PRICE);
        }

        $top_categories = $this->category_model->get_top_categories(array());
        $all_categories = $this->category_model->get_all_categories(array());
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
        Template::set('data', $data);
        Template::render();
    }

//end index()
    //--------------------------------------------------------------------

    /**
     * If the Auth lib is loaded, it will set the current user, since users
     * will never be needed if the Auth library is not loaded. By not requiring
     * this to be executed and loaded for every command, we can speed up calls
     * that don't need users at all, or rely on a different type of auth, like
     * an API or cronjob.
     *
     * Copied from Base_Controller
     */
    protected function set_current_user() {
        if (class_exists('Auth')) {
            // Load our current logged in user for convenience
            if ($this->auth->is_logged_in()) {
                $this->current_user = clone $this->auth->user();

                $this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

                // if the user has a language setting then use it
                if (isset($this->current_user->language)) {
                    $this->config->set_item('language', $this->current_user->language);
                }
            } else {
                $this->current_user = null;
            }

            // Make the current user available in the views
            if (!class_exists('Template')) {
                $this->load->library('Template');
            }
            Template::set('current_user', $this->current_user);
        }
    }

   public function bycategory($id) {
        $this->load->model('item_model');
        $this->load->model('category_model');
        $this->load->library('users/auth');
        $this->set_current_user();

        if ($cart_id = $this->session->userdata('cart_id')) {
            $this->load->model('cart/cart_model');
            $cart = $this->cart_model
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();
            $cart_price = $this->cart_model
                    ->select('SUM(ITEM_PRICE) AS TOTAL_PRICE')
                    ->where('cart.CART_ID', $cart_id)
                    ->find_all();

            $this->session->set_userdata('cart', $cart);
            $this->session->set_userdata('total_price', $cart_price[0]->TOTAL_PRICE);
        }

        $top_categories = $this->category_model->get_top_categories(array());
        $all_categories = $this->category_model->get_all_categories(array());
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
        Template::set('data', $data);
        Template::render();
    }

    public function item($id) {

        $this->load->model('item_model');
        $this->load->model('category_model');

        $this->load->library('users/auth');
        $this->set_current_user();

        $item = $this->item_model->get_item_by_id($id);

        $top_categories = $this->category_model->get_top_categories(array());

        $products = $this->item_model->get_items_by_categories($top_categories);

        $new_item = $this->item_model->get_new_items(4);
        $sale_item = $this->item_model->sale_item(4);
        $common_item = $this->item_model->common_item(4);


        $data = array(
            'item' => $item,
            'new_item' => $new_item,
            'sale_item' => $sale_item,
            'common_item' => $common_item,
            'more_items' => $this->item_model->get_more_items($id),
            'products' => $products
        );
        Template::set('data', $data);
        Template::render();
    }

}

/* end ./application/controllers/home.php */
