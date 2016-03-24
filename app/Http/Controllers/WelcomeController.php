<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    //
    public function contact(){
    	echo "Đây là một Dragon-V";
    }

    public function about(){
    	return view('pages.about');
    }
}
