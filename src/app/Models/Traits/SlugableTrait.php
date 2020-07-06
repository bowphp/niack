<?php

namespace Bow\Niack\Models\Traits;

use App\Models\Slug;

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
