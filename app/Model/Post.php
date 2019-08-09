<?php

namespace App\Model;

use Bow\Database\Barry\Model;
use App\Traits\SlugableTrait;

class Post extends Model
{
    use SlugableTrait;

    /**
     * Get the user who have create the post
     * 
     * @return User
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
