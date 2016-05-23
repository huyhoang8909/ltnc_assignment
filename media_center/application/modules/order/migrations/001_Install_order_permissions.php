<?php defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_order_permissions extends Migration
{
	/**
	 * @var array Permissions to Migrate
	 */
	private $permissionValues = array(
		array(
			'name' => 'Order.Content.View',
			'description' => 'View Order Content',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Content.Create',
			'description' => 'Create Order Content',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Content.Edit',
			'description' => 'Edit Order Content',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Content.Delete',
			'description' => 'Delete Order Content',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Reports.View',
			'description' => 'View Order Reports',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Reports.Create',
			'description' => 'Create Order Reports',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Reports.Edit',
			'description' => 'Edit Order Reports',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Reports.Delete',
			'description' => 'Delete Order Reports',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Settings.View',
			'description' => 'View Order Settings',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Settings.Create',
			'description' => 'Create Order Settings',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Settings.Edit',
			'description' => 'Edit Order Settings',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Settings.Delete',
			'description' => 'Delete Order Settings',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Developer.View',
			'description' => 'View Order Developer',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Developer.Create',
			'description' => 'Create Order Developer',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Developer.Edit',
			'description' => 'Edit Order Developer',
			'status' => 'active',
		),
		array(
			'name' => 'Order.Developer.Delete',
			'description' => 'Delete Order Developer',
			'status' => 'active',
		),
    );

    /**
     * @var string The name of the permission key in the role_permissions table
     */
    private $permissionKey = 'permission_id';

    /**
     * @var string The name of the permission name field in the permissions table
     */
    private $permissionNameField = 'name';

	/**
	 * @var string The name of the role/permissions ref table
	 */
	private $rolePermissionsTable = 'role_permissions';

    /**
     * @var numeric The role id to which the permissions will be applied
     */
    private $roleId = '1';

    /**
     * @var string The name of the role key in the role_permissions table
     */
    private $roleKey = 'role_id';

	/**
	 * @var string The name of the permissions table
	 */
	private $tableName = 'permissions';

	//--------------------------------------------------------------------

	/**
	 * Install this version
	 *
	 * @return void
	 */
	public function up()
	{
		$rolePermissionsData = array();
		foreach ($this->permissionValues as $permissionValue) {
			$this->db->insert($this->tableName, $permissionValue);

			$rolePermissionsData[] = array(
                $this->roleKey       => $this->roleId,
                $this->permissionKey => $this->db->insert_id(),
			);
		}

		$this->db->insert_batch($this->rolePermissionsTable, $rolePermissionsData);
	}

	/**
	 * Uninstall this version
	 *
	 * @return void
	 */
	public function down()
	{
        $permissionNames = array();
		foreach ($this->permissionValues as $permissionValue) {
            $permissionNames[] = $permissionValue[$this->permissionNameField];
        }

        $query = $this->db->select($this->permissionKey)
                          ->where_in($this->permissionNameField, $permissionNames)
                          ->get($this->tableName);

        if ( ! $query->num_rows()) {
            return;
        }

        $permissionIds = array();
        foreach ($query->result() as $row) {
            $permissionIds[] = $row->{$this->permissionKey};
        }

        $this->db->where_in($this->permissionKey, $permissionIds)
                 ->delete($this->rolePermissionsTable);

        $this->db->where_in($this->permissionNameField, $permissionNames)
                 ->delete($this->tableName);
	}
}