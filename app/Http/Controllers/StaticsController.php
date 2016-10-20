<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticsController extends Controller
{
	public function root(){
    	return view('welcome');	
    }
    public function profile(){
    	return view('statics/profile');	
    }

}
