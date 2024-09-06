<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function home() {
        return view('jobsheet2.home');
    }

    public function foodBeverage() {
        return view('jobsheet2.food-beverage');
    }

    public function beautyHealth() {
        return view('jobsheet2.beauty-health');
    }

    public function homeCare() {
        return view('jobsheet2.home-care');
    }

    public function babyKid() {
        return view('jobsheet2.baby-kid');
    }
}
