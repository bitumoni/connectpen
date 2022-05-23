<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   // /** 
 //   * @return void
 //   */
  //  public function __construct(){
 //       $this->middleware('auth');
 //   }

    public function index(){
        return view('user');
    }

    public function show($id) {
        return 'user Id:' .$id;
    }
    public function signup() {
        return view('signup');
    }

    public function reg() {
        return view('reg');
    }

    public function login() {
        return view('login');
    }

    public function msg() {
        return view('msg');
    }

    public function demo() {
        return view('demo');
    }

    public function test() {
        return view('test');
    }

    public function menu() {
        return view('menu');
    }

    public function post(Request $req) {
        return $req->input();
    }
}