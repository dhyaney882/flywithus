<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Auth;

use Session;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    public function index()

    {
    $flights = Flight::all();
        // dd($posts);
        // $JSONfile = json_encode($posts);
        // dd($JSONfile);
        return view('admin.flight.main',compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //CREATE
        return view('admin.flight.create');
        
    }
    public function showBooking($id){
        $flight= Flight::where('id',$id)->first();
        $user=Auth::user();
        if($user==NULL)
        {
            return redirect('/login');
        }
        else{
            return view('frontend.bookflight', compact('flight'));
        }
        
       
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CREATE
        // dd($request->all());
        $request->validate([
            'flightnumber' => 'required',
            'tickets' => 'required',
            'source'=>'required',
            'destination'=>'required',
            'date'=>'required',
            'time'=>'required',
            'price'=>'required'

        ]);

        

        

        $Flight = new Flight();
        $Flight->flightnumber = $request->flightnumber;
        $Flight->tickets = $request->tickets;
        $Flight->source = $request->source;
        $Flight->destination= $request->destination;
        $Flight->date= $request->date;
        $Flight->time= $request->time;
        $Flight->price= $request->price;

        $Flight->save();


        if($Flight){
            //Redirect with Flash message
            return redirect('/admin/flights/')->with('status', 'Flight added Successfully!');
        }
        else{
            return redirect('/admin/flights/create')->with('status', 'There was an error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Read individual
        // $posts = Post::find(3)->get();
        $flight = Flight::findOrFail($id);
        return view('admin.posts.show',compact('posts'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Update View
        $posts = Flight::where('id',$id)->first();
        return view('admin.flight.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) 
    {
        $request->validate([
            'flightnumber' => 'required',
            'tickets' => 'required',
            'source'=>'required',
            'destination'=>'required',
            'date'=>'required',
            'time'=>'required',
            'price'=>'required'
            

        ]);

        
        //Update
        $Flight = Flight::find($id);
        $Flight->flightnumber = $request->flightnumber;
        $Flight->tickets = $request->tickets;
        $Flight->source = $request->source;
        $Flight->destination= $request->destination;
        $Flight->date= $request->date;
        $Flight->time= $request->time;
        $Flight->price= $request->price;

        $Flight->save();

        if($Flight->save()){
            return redirect('admin/flights')->with('status', 'Flight edited Successfully!');
        }
        else{
            return redirect('admin/flights/edit')->with('status', 'There was an error');

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);
        if($flight->delete()){
            return redirect('admin/flights')->with('status', 'Flight deleted successfully');
        }
        else return redirect('admin/flights')->with('status', 'There was an error');
        
    }
    public function searchFlightForAdmin(Request $request){

        $searched=$request->searched;
        $data= Flight::orWhere('source','Like',"%$searched%")->orWhere('destination','Like',"%$searched%")->get();
            return view('admin.flight.searchflight',compact('data','searched'));
    }
    

}
