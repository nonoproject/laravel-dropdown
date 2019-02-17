<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateMenusTable extends Migration
{
    /**
     * Run the migrations
     * 
     * @return void
     */
    public function up(){
    Schema::create('menus', function (Blueprint $table){
        $table->increments('id');
    });
    }

    /**
     * Reverse the migration
     */
    public function down(){
        Schema::dropIfExist('menus');
    }
}