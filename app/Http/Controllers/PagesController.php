<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('Pages.home');
    }

    public function about() {
        return view('Pages.about');
    }
}