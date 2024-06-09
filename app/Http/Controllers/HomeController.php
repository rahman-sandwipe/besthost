<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View {
        return view('frontends.pages.home');
    }
    
    public function searchDomain() : View {
        return view('frontends.pages.domain-search');
    }
}
