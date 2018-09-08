<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller{
    public function input(Request $request){
    	return view('Student');
    }

    public function list(Request $request){
    	$data = [];
    	for($i=0 ; $i<10 ; $i++){
    		$data[] = [
    			'no'=>$i,
    			'fullname'=>'A'.$i,
    			'age'=>($i*10)
    		];
    	}
    	return view('list')->with([
    		'data' => $data
    	]);
    }

    public function home(Request $request){
    	return view('homeStudent');
    }
}
