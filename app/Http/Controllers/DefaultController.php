<?php

namespace sivae\Http\Controllers;

use Illuminate\Http\Request;

use sivae\Http\Requests;

class DefaultController extends Controller
{
    public function index(){
    	return view('page.welcome');
    }
}
