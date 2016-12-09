<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Db extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

//        Schema::create('admin', function (Blueprint $tbl){
//            $tbl->increments('id');
//            $tbl->string('username')->unique();
//            $tbl->string('password');
//            $tbl->string('fullname');
//            $tbl->string('email');
//            $tbl->string('address');
//            $tbl->rememberToken();
//            $tbl->timestamps();
//        });

        Schema::create('bloodtype', function (Blueprint $tbl){
            $tbl->increments('id');
            $tbl->string('name');
            $tbl->string('description');
            $tbl->timestamps();
        });

        Schema::create('contactus', function (Blueprint $tbl){

            $tbl->increments('id');
            $tbl->string('fullname');
            $tbl->string('email');
            $tbl->string('message');
            $tbl->timestamps();
        });



        Schema::create('users', function (Blueprint $tbl){
            $tbl->increments('id');
            $tbl->integer('blood_type_id')->unsigned();
            $tbl->string('username');
            $tbl->string('password');
            $tbl->string('fullname');
            $tbl->string('pob');
            $tbl->date('dob');
            $tbl->integer('weight');
            $tbl->string('disease_history');
            $tbl->string('phonenumber');
            $tbl->string('address');
            $tbl->string('status');
            $tbl->string('is_admin');
            $tbl->timestamps();

            $tbl->foreign('blood_type_id')->references('id')->on('bloodtype')->onDelete('cascade');
            //$tbl->foreign('blood_type_id')->references('id')->on('bloodtype');
        });



        Schema::create('blood_stock', function (Blueprint $tbl){
            $tbl->increments('id');
            $tbl->integer('user_id')->unsigned();
            $tbl->integer('total');
            $tbl->string('status');
            $tbl->timestamps();

            $tbl->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$tbl->foreign('donor_id')->references('id')->on('donor');
        });

        Schema::create('information',function (Blueprint $tbl){
            $tbl->increments('id');
            $tbl->integer('user_id')->unsigned();
            $tbl->string('title');
            $tbl->text('content');
            $tbl->timestamps();
            $tbl->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('comment', function (Blueprint $tbl){
            $tbl->increments('id');
            $tbl->integer('information_id')->unsigned();
            $tbl->integer('user_id')->unsigned();
            $tbl->string('comment');
            $tbl->timestamps();

            $tbl->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $tbl->foreign('information_id')->references('id')->on('information')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('blood_stock');
        Schema::drop('information');
        Schema::drop('comment');
        Schema::drop('contactus');
        Schema::drop('bloodtype');
        Schema::drop('admin');
    }
}
