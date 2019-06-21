<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id_fk')->references('id')->on('users');
            $table->enum('event_type',array(0,1,2))->comment('0=>event 1=>workshop 2=>seminar');
            $table->string('title');
            $table->string('venue');
            $table->time('start_time');
            $table->time('end_time');
            $table->date('start_date');
            $table->date('end_date');
            $table->double('latitude');
            $table->double('longitude');
            $table->text('location');
            $table->string('website');
            $table->text('terms_condition');
            $table->string('contact_name1');
            $table->integer('contact_number1');
            $table->string('contact_email1');
            $table->string('contact_name2');
            $table->integer('contact_number2');
            $table->string('contact_email2');
            $table->text('description');
            $table->string('cost',10);
            $table->enum('status',array(0,1,2))->comment('0=>unpublished 1=>published 2=>removed');
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
        Schema::dropIfExists('events');
    }
}
