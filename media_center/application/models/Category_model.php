<?php defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Emailer Model
 *
 * @package    Bonfire\Modules\Emailer\Models\Emailer_model
 * @author     Bonfire Dev Team
 * @link       http://cibonfire.com/docs/guides
 */
class Category_model  extends BF_Model
{
    protected $table_name   = 'category';
    protected $key          = 'CATEGORY_ID';
    protected $soft_deletes = FALSE;
    protected $date_format  = 'int';
    protected $log_user     = FALSE;

    protected $set_created  = TRUE;
    protected $created_field    = 'created_on';
    protected $created_by_field = 'created_by';
    
    protected $category_priority_field = 'CATEGORY_PRIORITY';

    protected $set_modified     = FALSE;
    protected $modified_field   = 'modified_on';
    protected $modified_by_field = 'modified_by';

    protected $deleted_field    = 'deleted';
    protected $deleted_by_field = 'deleted_by';

    // Observers
    protected $before_insert    = array();
    protected $after_insert     = array();
    protected $before_update    = array();
    protected $after_update     = array();
    protected $before_find      = array();
    protected $after_find       = array();
    protected $before_delete    = array();
    protected $after_delete     = array();

    protected $return_insert_id = true;
    protected $return_type      = 'object';
    protected $protected_attributes = array();
    protected $field_info           = array();

    protected $validation_rules         = array();
    protected $insert_validation_rules  = array();
    protected $skip_validation          = false;
    protected $empty_validation_rules   = array();
    
    public function get_top_categories($params){
        $top_categories = $this->order_by('CATEGORY_PRIORITY', 'DESC')
                        ->limit(3)
                        ->find_all();

       
        return $top_categories;
    }
}
/* End of file /emailer/models/emailer_model.php */
