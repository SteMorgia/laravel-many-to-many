<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        if(Auth::check()){ //potevo non metterlo perchè ho usato la middleware
            $user=Auth::user();
            return view('admin.home');
        }
    }
}
