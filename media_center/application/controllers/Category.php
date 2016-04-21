<?php
require_once(APPPATH.'core/Public_Controller.php');

class Category extends Public_Controller {

    // Override the title
    public $title = 'Category';

    // function __construct()
    // {
    //     // Append a stylesheet (home.css) to the defaults
    //     // $this->styles[] = 'home';
    //     parent::__construct();
    // }
	// aciont la index
    function index()
    {
        // The output of this view will be wrapped in the base template
		$this->load->view('user/category-grid');
    }
	
	public function test()
	{
		$this->load->view('user/category-grid');
	}
	
	//neu can action nao nua thi viet' rad2deg
	
	public function action_q() {
		//load view len
	}
}