<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return redirect()->route(auth()->user()->type);
    }
    public function admin() {
        $user = User::latest()->get();
        return view('backends.pages.dashboard', 
        compact('user'));
    }
}
