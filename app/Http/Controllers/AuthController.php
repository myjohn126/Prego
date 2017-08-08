<?php

namespace Prego\Http\Controllers;

use Auth;
use Prego\User;
use Illuminate\Http\Request;

class AuthController extends Controllers
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function getLogin()
    {
        return view('auth.login');
    }
}