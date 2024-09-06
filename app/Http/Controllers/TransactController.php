<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactController extends Controller
{
    public function transact() {
        return view('jobsheet2.transact');
    }
}
