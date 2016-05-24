<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Cart_model extends BF_Model {

    protected $table_name = 'cart';
    protected $key = 'CART_ID';
    protected $date_format = 'datetime';
    protected $log_user = false;
    protected $set_created = false;
    protected $set_modified = false;
    protected $soft_deletes = false;
    // Customize the operations of the model without recreating the insert,
    // update, etc. methods by adding the method names to act as callbacks here.
    protected $before_insert = array();
    protected $after_insert = array();
    protected $before_update = array();
    protected $after_update = array();
    protected $before_find = array();
    protected $after_find = array();
    protected $before_delete = array();
    protected $after_delete = array();
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
    protected $validation_rules = array(
        array(
            'field' => 'STATUS',
            'label' => 'lang:cart_field_STATUS',
            'rules' => 'required|max_length[10]',
        ),
    );
    protected $insert_validation_rules = array();
    protected $skip_validation = false;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function find_all() {
        $this->db->join('cart_item', 'cart_item.CART_ID = cart.CART_ID')
                ->join('item', 'cart_item.ITEM_ID = item.ITEM_ID')
                ->join('manufacturer', 'manufacturer.manufacturer_id = item.manufacturer_id');
        return parent::find_all();
    }

    public function create_cart($item_id, $cart_id = null) {
        // find the cart for this user
        if (empty($cart_id)) {
            // create cart for the user
            $this->db->insert('cart', ['STATUS' => 'ordered']);
            $cart_id = $this->db->insert_id();
        }

        // add item to the cart
        $this->db->insert('cart_item', [
            'CART_ID' => $cart_id,
            'ITEM_ID' => $item_id,
            'AMOUNT' => 1
        ]);

        return $cart_id;
    }

    public function delete($id = null) {
        $this->db->delete('cart_item', array('CART_ID' => $id));
        return parent::delete($id);
    }



}
