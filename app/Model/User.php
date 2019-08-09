<?php

namespace App\Model;

use Bow\Auth\Authentication as Model;

class User extends Model
{
    /**
     * The list of hidden field when toJson is called
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
    
    /**
     * Get the post created by the user
     * 
     * @return mixed
     */
    public function posts()
    {
        return $this->hasMany(Post::class, $this->id);
    }
}
