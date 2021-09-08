<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected  $fillabele=['date',' departure time','passenger name','ticket number','flight number','source','destination','price']; 
}
