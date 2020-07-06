<?php

namespace Bow\Niack\Models;

use Bow\Database\Barry\Model;

class Media extends Model
{
    /**
     * Get user who create media
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
