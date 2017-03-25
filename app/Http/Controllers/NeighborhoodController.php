<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Neighborhoods;

class NeighborhoodController extends Controller
{
    public function search(Request $request){
    	$hoods = Neighborhoods::where('name', 'LIKE', '%' . $request->get('query') . '%')->limit(5)->get();

    	if($hoods->count() > 0){
    		return response()->json($hoods, 200);
    	}else{
    		return response()->json([], 400);
    	}
    }
}
