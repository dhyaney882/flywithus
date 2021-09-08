<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FrontendController extends Controller
{
    
public function index()
{
    return view('admin.home');
}


public function ShowFlights()
{
    $flight=Flight::all();
    return view('frontend.flight',compact('flight'));
}
public function searchFlightForUser(Request $request){

    $searched=$request->searched;
    $message="";
    $flight= Flight::orWhere('source','Like',"%$searched%")->orWhere('destination','Like',"%$searched%")->get();
    if($flight->isempty()){
        $message = "No results found";
    }
        return view('frontend.searchflight',compact('flight','searched','message'));
}

























}
