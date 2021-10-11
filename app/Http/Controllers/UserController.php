<?php

namespace App\Http\Controllers;
use\App\Models\User;
use\Illuminate\http\request;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){

     return ["name"=>"sanjay","email"=>"sanjay@gmail.com","address"=>"Greater noida"];

    }
    public function add(Request $req){
    

    }

}
