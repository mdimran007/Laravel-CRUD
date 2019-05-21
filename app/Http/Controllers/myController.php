<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Student;

class myController extends Controller
{
    public function index(){

    	$allStudent= Student::All();
    	return view('home',['allStudent'=>$allStudent]);

    }
}
