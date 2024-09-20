<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view(view:'user');
    }

    public function register(Request $request): never {
        dd(vars: $request);

        //return view('display');
    }
}
