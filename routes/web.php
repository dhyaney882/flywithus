
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});
Route::post('booking/cancel/{id}',[BookingController::class, 'BookingCancelByUser']);

Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
   
    Route::get('/',[FrontendController::class, 'index']);
    Route::get('/bookingcancel',[BookingController::class, 'cancelled']);
        Route::get('/bookingconfirm',[BookingController::class, 'confirmed']);
        Route::post('/searchflight',[FlightController::class, 'searchFlightForAdmin']);


       
    
    Route::group(['prefix'=>'users','middleware'=>'auth'],function (){

        Route::get('/',[UserController::class, 'index']);
        Route::post('/edituserinfo/{id}',[UserController::class, 'updateUser']);
        Route::get('/add-user',[UserController::class, 'addUser']);
        Route::post('/searchuser',[UserController::class, 'searchuserForAdmin']);
        Route::post('/add-user',[UserController::class, 'addNewUser']);
        Route::get('/edit/{id}',[UserController::class, 'editUser']);
        
        Route::get('/delete/{id}',[UserController::class, 'destroy']);
       

    });

    Route::group(['prefix'=>'flights','middleware'=>'auth'],function (){

        Route::get('/',[FlightController::class, 'index']);
        Route::get('/create',[FlightController::class, 'create']);
        Route::post('/',[FlightController::class, 'store']);
        Route::get('/{id}/edit',[FlightController::class, 'edit']);
        Route::post('/{id}',[FlightController::class, 'update']);
        Route::delete('/{id}',[FlightController::class, 'destroy']);
        Route::post('/searchflight',[FlightController::class, 'searchflightForAdmin']);

    });
    Route::group(['prefix'=>'booking','middleware'=>'auth'],function (){

        Route::get('/',[BookingController::class, 'index']);
        Route::get('/create',[Bookingcontoller::class, 'create']);
        Route::post('/',[FlightController::class, 'store']);
        Route::post('/confirm/{id}/{flight_id}',[BookingController::class, 'BookingConfirm']);
        Route::post('/cancel/{id}',[BookingController::class, 'BookingCancel']);
        
       

    });
    
    

   //Read all the Posts
   
   
 // my booking cancel


   //Create a new post
   
   Route::post('/flightad','flightController@store'); //Logical Part

   //Edit a POST
   Route::get('/flightad/{id}/edit','flightController@edit'); //View
   Route::post('/flightad/{id}','flightController@update'); //Logical Part

   //Show individual data
   Route::get('/flightad/{id}','flightController@show');

   //Delete an indicidual post
   Route::delete('/flightad/{id}','flightController@destroy');



});

Route::namespace('App\Http\Controllers')->group(function()
    {
        
        Route::get('/create','FlightController@Create');
        Route::post('/savedata','FlightController@store');
    });

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    


    Route::get('/flight',[FrontendController::class, 'ShowFlights']); 
    Route::post('/searchflight',[FrontendController::class, 'searchFlightForUser']);
    Route::get('/flight/book/{id}',[FlightController::class, 'showbooking']); 


    //learning codes
    Route::get('/test',[TestController::class, 'index']); 
    Route::get('/test/create',[TestController::class, 'create']);
    Route::post('/test',[TestController::class, 'store']);
    Route::post('/flight',[FlightController::class, 'store']);
    Route::get('/flight/create',[FlightController::class, 'create']);
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


    Route::get('/flight/show/{id}',[FlightController::class, 'flightdetail']);
    


    Route::post('/book',[BookingController::class, 'Store']);
    Route::get('/mybookings',[BookingController::class, 'MyBookings']);



    Route::get('/bookflight','BookingController@Bookflight');

 

   

    Route::get('/admin/users/edit/{id}',[UserController::class, 'edit']);
    Route::get('/flights/edit/{id}',[UserController::class, 'edit']);


    Route::get('/admin/bookings', function(){
        return view('admin.home');
    });
