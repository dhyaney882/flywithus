<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Booking;
use App\Models\Flight;
use Auth;



class BookingController extends Controller

{

    //
    public function index(){
        $booking = Booking::where('status','unconfirmed')->get();
        return view('admin.booking.bookingview',compact('booking'));
    }
    public function confirmed(){
        $booking = Booking::where('status','confirmed')->get();
        return view('admin.booking.confirm',compact('booking'));
    }
    public function cancelled(){
        $booking = Booking::where('status','cancelled')->get();
        return view('admin.booking.cancel',compact('booking'));
    }
    public function edit($id){
        $booking=Booking::where('id',$id)->first();
        return view('admin.booking.editbooking',compact('booking'));
           }

    public function BookingCancelByUser($id){
        $booking = Booking::findOrFail($id);
        $booking->status="cancelled ";
        if($booking->save()){
            return redirect('/mybookings')->with('success','booking cancelled');
        }
        else{
            return redirect('/mybookings')->with('error', 'booking could not be cancelled');
        }

    }
    public function updatebooking(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required',

            'address' => 'required',

            'required_seat'=>'required',

             'contact'=>'required',

             'source'=>'required',

            'destination'=>'required',

            'date' => 'required',

            'time' => 'required',

            
        ]
        );

        $data = Booking::findOrFail($id);
        $data->username = $request->username;

            $data->address = $request->address;

            $data->required_seat= $request->required_seat;

            $data->contact = $request->contact;

            $data->source = $request->source;

            $data->destination = $request->destination;

            $data->date= $request->date;
            $data->time= $request->date;
        
        

        
        
       
       
        if ($data->save()) {
           
             return redirect('admin/booking/')->with('success', 'User Updated Successfully.');
        }

        return redirect('admin/booking/edit-user/' . $id)->with('errors', ['Sorry Some Error Occured.Please Try Again']);
    }
    

           public function destroy($id)
           {
               $booking = Booking::find($id);
               if($booking->delete()){
                   return redirect('admin/booking')->with('status', 'booking deleted successfully');
               }
               else return redirect('admin/booking')->with('status', 'There was an error');
            }

     function Store(Request $request)

    {

        //CREATE

        // dd($request->all());

        $request->validate([

            'username' => 'required',

            'user_id' => 'required',

            'address' => 'required',

            'flightnumber' => 'required',

            'required_seat'=>'required',

             'contact'=>'required',

             'source'=>'required',

            'destination'=>'required',

            'date' => 'required',

            'time' => 'required',


        ]);



           

            $data = new Booking();
            $data->flight_id = $request->flight_id;

            $data->username = $request->username;

            $data->user_id = $request->user_id;

            $data->flightnumber = $request->flightnumber;

            $data->address = $request->address;

            $data->required_seat= $request->required_seat;

            $data->contact = $request->contact;

            $data->source = $request->source;

            $data->destination = $request->destination;

            $data->date= $request->date;
            
            $data->time= $request->time;

            $data->save();



        if($data->save()){

            //Redirect with Flash message

          return redirect('/')->with('status', 'waiting for approvel!');

        }

        else{

            return redirect('/')->with('status', 'There was an error!');

        }
        



    }

    public function MyBookings()
    {
        $user=Auth::id();
        $mybooking = Booking::where('user_id',$user)->get();
         return view('frontend.mybookings',compact('mybooking'));

        
    }
    public function BookingConfirm($id, $flight_id)
{
    $book= Booking::find($id);
    $flight=Flight::find($flight_id);
   
              
    if($book && $flight)
    {
       if($book->required_seat<=$flight->tickets)
       {
        $book->status='confirmed';
        $flight->tickets=$flight->tickets - $book->required_seat;
       }
       else
       {
        $book->status='nospace';
       }
    }
    $book->save();
    $flight->save();
    if($book->save() &&  $flight->save())
    {
     return redirect('/admin/bookings')->with('status', 'Booking Confirmed Successfully!');
    }
}
    public function BookingCancel($id)

    {
        $booking = Booking::findOrFail($id);
        $booking->status="cancelled ";
        if($booking->save()){
            return redirect('/admin/bookingcancel')->with('success','booking cancelled');
        }
        else{
            return redirect('/admin/booking')->with('error', 'booking could not be cancelled');
        }
    }



}