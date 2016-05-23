<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Category controller
 */
class Category extends Front_Controller
{
    protected $permissionCreate = 'Category.Category.Create';
    protected $permissionDelete = 'Category.Category.Delete';
    protected $permissionEdit   = 'Category.Category.Edit';
    protected $permissionView   = 'Category.Category.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('category/category_model');
        $this->lang->load('category');
        
        

        Assets::add_module_js('category', 'category.js');
    }

    /**
     * Display a list of Category data.
     *
     * @return void
     */
    public function index($offset = 0)
    {
        
        $pagerUriSegment = 3;
        $pagerBaseUrl = site_url('category/index') . '/';
        
        $limit  = $this->settings_lib->item('site.list_limit') ?: 15;

        $this->load->library('pagination');
        $pager['base_url']    = $pagerBaseUrl;
        $pager['total_rows']  = $this->category_model->count_all();
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;

        $this->pagination->initialize($pager);
        $this->category_model->limit($limit, $offset);
        
        $records = $this->category_model->find_all();

        Template::set('records', $records);
        

        Template::render();
    }
    
}