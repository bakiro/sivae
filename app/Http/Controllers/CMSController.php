<?php

namespace sivae\Http\Controllers;

use Illuminate\Http\Request;

use sivae\Http\Requests;

class CMSController extends Controller
{
     public function index(){
    	return view('office.index')->with('active', '1');;
    }

    public function order(){
    	return view('office.order')->with('active', '2');;
    }

    public function date(){
    	return view('office.plantilla')->with('active', '3');;
    }
}
