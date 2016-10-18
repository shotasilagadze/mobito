<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MobileInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('mobile_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('model');
            $table->string('description');
            $table->string('color');            
            $table->integer('price');         
            $table->integer('user_id');            
            $table->timestamps();
            $table->softDeletes();
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
    }
}
