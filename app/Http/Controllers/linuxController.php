<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linuxController extends Controller
{
    public function index(){
    	//return view('linux', ['blade' => 'View do Controller']);
    	return ['json' => 'Json no Laravel'];
    }
}
