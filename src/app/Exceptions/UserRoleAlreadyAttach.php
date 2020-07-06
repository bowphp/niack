<?php

namespace Bow\Niack\Exceptions;

use App\Models\Account\Role;
use App\Models\Account\User;

class UserRoleAlreadyAttach extends \Exception
{
    /**
     * Define the role instance
     * 
     * @var Role
     */
    private $role;

    /**
     * Define the role instance
     * 
     * @var User
     */
    private $user;

    /**
     * Set the role value
     *
     * @param Role $role
     * @return UserRoleAlreadyAttach
     */
    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Set the user value
     *
     * @param User $role
     * @return UserRoleAlreadyAttach
     */
    public function setUser(User $role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role value
     *
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get role value
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
