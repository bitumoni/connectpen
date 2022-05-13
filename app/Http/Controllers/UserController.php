<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function show($id) {
        return 'user Id:' .$id;
    }
    public function signup() {
        return view('signup');
    }
    public function post(Request $req) {
        return $req->input();
    }
}