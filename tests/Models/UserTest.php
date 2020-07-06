<?php

use Bow\Testing\TestCase;
use App\Models\Account\User;

class UserTest extends TestCase
{
    public function test_create_user()
    {
        // Create the user
        $user = User::create([
            'name' => "Nick",
            'description' => "The light cms",
            'email' => "niack@gmail.com",
            'password' => "password"
        ]);

        $this->assertInstanceOf(User::class, $user);
    }
}
