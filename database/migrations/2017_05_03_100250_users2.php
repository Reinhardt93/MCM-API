<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
       Schema::create('users', function (Blueprint $table) {
           $table->increments('userID');
           $table->string('username')->unique();
           $table->string('password');
           $table->string('userRole');
           $table->integer('shopID')->unsigned();
           $table->foreign('shopID')->references('shopID')->on('shops');
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
          Schema::drop('users');
     }
   }
