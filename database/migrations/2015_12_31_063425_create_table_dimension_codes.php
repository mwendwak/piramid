<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDimensionCodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_codes', function(Blueprint $table){
            $table->increments('id');
            $table->string('code',30);
            $table->string('name',150);
            $table->text('description');
            $table->boolean('blocked');
            $table->integer('dimension_value')->unsigned();
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
        Schema::drop('dimension_codes');
    }
}
