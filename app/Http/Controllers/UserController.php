<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user() {
        return view('jobsheet2.user')
            ->with('name', 'Amanda Jasmyne');
    }
}
