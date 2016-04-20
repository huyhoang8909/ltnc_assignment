<?php

namespace Entities;

/**
 * RoleUser
 */
class RoleUser
{
    /**
     * @var boolean
     */
    private $roleId;

    /**
     * @var integer
     */
    private $userId;


    /**
     * Set roleId
     *
     * @param boolean $roleId
     *
     * @return RoleUser
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return boolean
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return RoleUser
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}

