<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Amanda Jasmyne - 2241760081';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan id ' . $id;
    }
}
