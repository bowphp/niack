<?php

namespace App\Model;

use Bow\Database\Barry\Model;

class Category extends Model
{
    /**
     * Get the post associate to the category
     *
     * @return mixed
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
