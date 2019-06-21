<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('password');
            $table->integer('mobile_no')->nullable();
            $table->date('date_of_birth')->nullable();  
            $table->string('profile_picture')->nullable();
            $table->enum('user_status', array(0, 1, 2))->comment('0=>inactive 1=>active 2=>blocked')->nullable();
            $table->enum('gender', array(0, 1))->comment('0=>male 1=>female')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->enum('send_email_notification', array(0, 1))->comment('0=>unverified 1=>verified')->nullable();
            $table->string('ip_address')->nullable();
            $table->rememberToken();    //for remember me session
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
        Schema::dropIfExists('csi_users');
    }
}
