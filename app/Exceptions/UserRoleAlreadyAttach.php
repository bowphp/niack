<?php

namespace App\Exceptions;

use App\Models\Role;
use App\Models\User;

class UserRoleAlreadyAttach extends \Exception
{
    /**
     * @var Role
     */
    private $role;

    /**
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
