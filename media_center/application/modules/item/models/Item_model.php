<?php defined('BASEPATH') || exit('No direct script access allowed');

class Item_model extends BF_Model
{
    protected $table_name	= 'item';
	protected $key			= 'ITEM_ID';
	protected $date_format	= 'datetime';

	protected $log_user 	= false;
	protected $set_created	= false;
	protected $set_modified = false;
	protected $soft_deletes	= false;


	// Customize the operations of the model without recreating the insert,
    // update, etc. methods by adding the method names to act as callbacks here.
	protected $before_insert 	= array();
	protected $after_insert 	= array();
	protected $before_update 	= array();
	protected $after_update 	= array();
	protected $before_find 	    = array();
	protected $after_find 		= array();
	protected $before_delete 	= array();
	protected $after_delete 	= array();

	// For performance reasons, you may require your model to NOT return the id
	// of the last inserted row as it is a bit of a slow method. This is
    // primarily helpful when running big loops over data.
	protected $return_insert_id = true;

	// The default type for returned row data.
	protected $return_type = 'object';

	// Items that are always removed from data prior to inserts or updates.
	protected $protected_attributes = array();

	// You may need to move certain rules (like required) into the
	// $insert_validation_rules array and out of the standard validation array.
	// That way it is only required during inserts, not updates which may only
	// be updating a portion of the data.
	protected $validation_rules 		= array(
		array(
			'field' => 'MANUFACTURER_ID',
			'label' => 'lang:item_field_MANUFACTURER_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'PROMOTION_ID',
			'label' => 'lang:item_field_PROMOTION_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'CATEGORY_ID',
			'label' => 'lang:item_field_CATEGORY_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'ITEM_NAME',
			'label' => 'lang:item_field_ITEM_NAME',
			'rules' => 'max_length[256]',
		),
		array(
			'field' => 'ITEM_PRICE',
			'label' => 'lang:item_field_ITEM_PRICE',
			'rules' => 'max_length[10]',
		),
		array(
			'field' => 'ITEM_QUANTITY',
			'label' => 'lang:item_field_ITEM_QUANTITY',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'IMAGE',
			'label' => 'lang:item_field_IMAGE',
			'rules' => 'max_length[55]',
		),
	);
	protected $insert_validation_rules  = array();
	protected $skip_validation 			= false;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
}