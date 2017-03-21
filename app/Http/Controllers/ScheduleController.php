<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Neighborhoods;

class ScheduleController extends Controller
{
    public function index(){
    	$data['hoods'] = Neighborhoods::paginate(10);

    	return view('schedule/main', $data);
    }
}
