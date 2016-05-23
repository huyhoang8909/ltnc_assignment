<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Item controller
 */
class Item extends Front_Controller
{
    protected $permissionCreate = 'Item.Item.Create';
    protected $permissionDelete = 'Item.Item.Delete';
    protected $permissionEdit   = 'Item.Item.Edit';
    protected $permissionView   = 'Item.Item.View';

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('item/item_model');
        $this->lang->load('item');
        
        

        Assets::add_module_js('item', 'item.js');
    }

    /**
     * Display a list of Item data.
     *
     * @return void
     */
    public function index($offset = 0)
    {
        
        $pagerUriSegment = 3;
        $pagerBaseUrl = site_url('item/index') . '/';
        
        $limit  = $this->settings_lib->item('site.list_limit') ?: 15;

        $this->load->library('pagination');
        $pager['base_url']    = $pagerBaseUrl;
        $pager['total_rows']  = $this->item_model->count_all();
        $pager['per_page']    = $limit;
        $pager['uri_segment'] = $pagerUriSegment;

        $this->pagination->initialize($pager);
        $this->item_model->limit($limit, $offset);
        
        $records = $this->item_model->find_all();

        Template::set('records', $records);
        

        Template::render();
    }
    
}