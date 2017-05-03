<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActiveCampaigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('activeCampaigns', function (Blueprint $table) {
           $table->integer('campaignID')->primary();
           $table->string('title');
           $table->string('image');
           $table->string('additionalText');
           $table->dateTime('dateStarts');
           $table->dateTime('dateEnds');
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
         Schema::drop('activeCampaigns');
     }
 }
