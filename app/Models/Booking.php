<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    use HasFactory;
    public $table="booking";
    protected $fillable=['flightnumber','user_id','username','address','required_seat','contact','source','destination','date','time']; 
}
