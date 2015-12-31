<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDimensionValueEntry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_value_entry', function(Blueprint $table){
            $table->increments('id');
            $table->enum('entry_type',['employee','user']);
            $table->integer('dimension_code');
            $table->integer('dimension_value');
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
        Schema::drop('dimension_value_entry');
    }
}
