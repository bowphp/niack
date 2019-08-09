<?php

namespace App\Model;

use Bow\Database\Barry\Model;

class Slugable extends Model
{
    /**
     * Get the slugable information
     * 
     * @return Post|Page
     */
    public function slugable()
    {
        return (new $this->slugable_type)
            ->find($this->slugable_id);
    }

    /**
     * Check if slugable is post
     * 
     * @return boolean
     */
    public function isPost()
    {
        return $this->slugable_type == Post::class;
    }

    /**
     * Check if slugable is page
     * 
     * @return boolean
     */
    public function isPage()
    {
        return $this->slugable_type == Page::class;
    }
}
