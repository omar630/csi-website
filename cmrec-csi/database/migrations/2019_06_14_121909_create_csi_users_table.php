<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csi_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name');
            $table->string('password');
            $table->integer('mobile_no');
            $table->date('date_of_birth');  
            $table->string('profile_picture');
            $table->enum('user_status', array(0, 1, 2))->comment('0=>inactive 1=>active 2=>blocked');
            $table->enum('gender', array(0, 1))->comment('0=>male 1=>female');
            $table->string('email');
            $table->string('reset_password_code', 50);
            $table->dateTime('last_login');
            $table->enum('send_email_notification', array(0, 1))->comment('0=>unverified 1=>verified');
            $table->string('ip_address');
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
