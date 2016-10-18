<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;



class IndexController extends Controller {



    public function home(Request $request) {
        
        return view('home');
    }

    public function add(Request $request){
    	return view('add');
    }

    public function login(Request $request){
        return view('loginpage');
    }


    public function mobile(Request $request){
        return view('mobile');
    }
    
    

}
