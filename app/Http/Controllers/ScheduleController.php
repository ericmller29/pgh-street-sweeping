<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Neighborhoods;

class ScheduleController extends Controller
{
    public function index(Request $request){
    	$data['hoods'] = Neighborhoods::where('approved', 1)->get();

    	if($request->ajax()){
    		return response()->json($data['hoods']);
    	}else{
    		return view('schedule/main', $data);
    	}
    }

    public function specific(Request $request){
    	$data['hood'] = Neighborhoods::where('slug', '=', $request->slug)->first();

    	return view('schedule/specific', $data);
    }
}
