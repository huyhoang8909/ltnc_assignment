<?php defined('BASEPATH') || exit('No direct script access allowed');

class Order_model extends BF_Model
{
    protected $table_name	= 'orders';
	protected $key			= 'ORDER_ID';
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
			'field' => 'SHIPPING_TYPE_ID',
			'label' => 'lang:order_field_SHIPPING_TYPE_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'PAYMENT_TYPE',
			'label' => 'lang:order_field_PAYMENT_TYPE',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'USER_ID',
			'label' => 'lang:order_field_USER_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'ADDRESS_ID',
			'label' => 'lang:order_field_ADDRESS_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'PAYMENT_ID',
			'label' => 'lang:order_field_PAYMENT_ID',
			'rules' => 'max_length[11]',
		),
		array(
			'field' => 'ORDER_STATUS',
			'label' => 'lang:order_field_ORDER_STATUS',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'ORDER_DATE',
			'label' => 'lang:order_field_ORDER_DATE',
			'rules' => '',
		),
		array(
			'field' => 'DELIVERY_DATE',
			'label' => 'lang:order_field_DELIVERY_DATE',
			'rules' => '',
		),
		array(
			'field' => 'TOTAL',
			'label' => 'lang:order_field_TOTAL',
			'rules' => 'max_length[8]',
		),
		array(
			'field' => 'PAYMENT_KEY',
			'label' => 'lang:order_field_PAYMENT_KEY',
			'rules' => 'max_length[20]',
		),
		array(
			'field' => 'PAYMENT_CODE',
			'label' => 'lang:order_field_PAYMENT_CODE',
			'rules' => 'max_length[20]',
		),
	);
	protected $insert_validation_rules  = array();
	protected $skip_validation 			= false;

    public $items = null;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

  public function create($user_id, $items, $shipping_type = 1, $payment_type = 'direct')
  {
    $total = 0;
    foreach ($items as $item) {
      $total += $item->ITEM_PRICE * $item->AMOUNT;
    }

    if ($shipping_type == 2) $total +=15;

    $this->db->insert('orders', [
        'SHIPPING_TYPE_ID' => $shipping_type,
        'USER_ID' => $user_id,
        'ORDER_STATUS' => 'PROCESSING',
        'TOTAL' => $total,
        'ORDER_DATE' => $this->set_date(),
        'PAYMENT_TYPE' => $payment_type
    ]);

    $order_id = $this->db->insert_id();

    $data = array();

    foreach ($items as $item) {
      $data[] = array(
        'ORDER_ID' => $order_id,
        'ITEM_ID' => $item->ITEM_ID,
        'AMOUNT' => $item->AMOUNT
      );
    }

    $this->db->insert_batch('order_item', $data);
  }

  public function find_all()
  {
    $this->db->join('shippingtype', "orders.SHIPPING_TYPE_ID = shippingtype.SHIPPING_TYPE_ID")
        ->join('users', 'users.id = orders.USER_ID');
    return parent::find_all();
  }

  public function get_order_items($conditions = array())
  {
    $orders = $this->where($conditions)->find_all();

    if(!empty($orders) && count($orders) > 0) {
        foreach ($orders as $order) {
            $this->db->select('*');
            $this->db->from('item');
            $this->db->where('ORDER_ID', $order->ORDER_ID);
            $this->db->join('order_item', 'item.ITEM_ID = order_item.ITEM_ID');
            $this->db->join('manufacturer', 'manufacturer.manufacturer_id = item.manufacturer_id');

            $order->items = $this->db->get()->result();
        }
    }

    return $orders;

  }

  public function delete_order($id)
  {
    $items = $this->db->get_where('order_item', array('ORDER_ID' => $id))->result();

    // update items quantity
    foreach ($items as $item) {
        $this->db->set('ITEM_QUANTITY', 'ITEM_QUANTITY+'. $item->AMOUNT, FALSE);
        $this->db->where('ITEM_ID', $item->ITEM_ID);
        $this->db->update('item');
    }

    $this->db->delete('order_item', array('ORDER_ID' => $id));
    $this->delete($id);
  }

}