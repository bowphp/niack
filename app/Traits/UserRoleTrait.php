<?php

namespace App\Traits;

trait UserRoleTrait
{
    /**
     * Check if user have role
     * 
     * @param Role $role
     * @return boolean
     */
    public function hasRule(Role $role)
    {
        return UserRole::where('user_id', $this->id)
            ->where('role_id', $role->id)->exists();
    }

    /**
     * Add the new role
     * 
     * @param Role $role
     * @return boolean
     */
    public function attach(Role $role)
    {
        return UserRole::create([
            'user_id' => $this->id,
            'role_id' => $role->id
        ]);
    }

    /**
     * Remote the new role
     * 
     * @param Role $role
     * @return boolean
     */
    public function detach(Role $role)
    {
        return UserRole::where('user_id', $this->id)
            ->where('role_id', $role->id)->delete();
    }
}