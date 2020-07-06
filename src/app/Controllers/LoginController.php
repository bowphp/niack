<?php

namespace Bow\Niack\Controllers;

use Bow\Http\Request;

class LoginController extends \App\Controllers\Controller
{
    /**
     * Show the login form
     *
     * @return void
     */
    public function showLogin()
    {
        return view('niack::login');
    }
}
