<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DefaultController extends Controller
{
    public function index(){
    	return view('page.welcome');
    }
}
