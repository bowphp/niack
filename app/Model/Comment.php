<?php

namespace App\Model;

use Bow\Database\Barry\Model;

class Comment extends Model
{
    /**
     * Check if comment have parent
     *
     * @return boolean
     */
    public function hasParent()
    {
        return $this->parent_id > 0;
    }

    /**
     * Get the parent comment
     *
     * @return Comment|null
     */
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    /**
     * Get all comments
     *
     * @return array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
