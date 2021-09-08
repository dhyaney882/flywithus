<?php

namespace App\Http\Controllers;
use App\Models\Test;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $test = Test::all();
        return view('test.test', compact('test'));
    }
    public function create(){
        return view('test.create_test');
    }
    public function store(Request $request){
        $request->validate([

            'name' => 'required',

            'address' => 'required',

            'age'=>'required'

        ]);



        $test = new Test();

        $test->name = $request->name;

        $test->address = $request->address;

        $test->age = $request->age;

        $test->save();




        if($test->save()){

            //Redirect with Flash message

            return redirect('/test')->with('status', 'Post added Successfully!');

        }

        else{

            return redirect('/test/create')->with('status', 'There was an error!');

        }
    }
}