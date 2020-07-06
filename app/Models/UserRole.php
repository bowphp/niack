<?php

namespace App\Models;

use Bow\Database\Barry\Model;

class UserRole extends Model
{
    /**
     * Get the user
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the role information
     *
     * @return User
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
