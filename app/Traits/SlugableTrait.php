<?php

namespace App\Traits;

trait SlugableTrait
{
    /**
     * Get the page slug
     * 
     * @return Slug
     */
    public function slug()
    {
        return Slug::where('slugable_type', static::class)
            ->where('slugable_id', $this->id)->first();
    }
}
