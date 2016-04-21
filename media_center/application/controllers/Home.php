<?php
require_once(APPPATH.'core/Public_Controller.php');

class Home extends Public_Controller {

    // Override the title
    public $title = 'Home';

    // function __construct()
    // {
    //     // Append a stylesheet (home.css) to the defaults
    //     // $this->styles[] = 'home';
    //     parent::__construct();
    // }

    function index()
    {
        // The output of this view will be wrapped in the base template
        $this->load->view('user/home');
    }
}