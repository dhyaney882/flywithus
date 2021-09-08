<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->integer('flight_id');
            $table->integer('user_id');
            $table->string('flightnumber');
            $table->string('address');
            $table->string('contact');
            $table->integer('required_seat');
            $table->string('source');
            $table->string('destination');
            $table->string('status')->default('unconfirmed');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
