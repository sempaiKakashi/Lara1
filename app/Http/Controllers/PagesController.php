<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

class PagesController extends Controller
{
    public function index()
    {
    	if(View::exists('pages.index')){
    		return view('pages.index');
    	}
    	else{
    		return 'Page not found';
    	}
    }
}
