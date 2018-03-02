<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //public function index(){
    //	return view('users');
    }
    //public function show($users){
    	//$usr = Users::find ($users); 
        //dd($usr->name);
        //resturn view('users', compact('usr'));
    //}
    public function index() {
       return view('users.index', ['user' => User::get()]);
   }
}