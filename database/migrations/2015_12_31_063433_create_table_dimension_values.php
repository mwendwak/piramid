<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDimensionValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_values', function(Blueprint $table){
            $table->increments('id');
            $table->integer('dimension');
            $table->string('value',30);
            $table->text('description',250);
            $table->enum('type',['Standard','Heading','Total','Begin-Total','End-Total']);
            $table->text('totaling');
            $table->boolean('blocked');
            $table->integer('dimension_code')->unsigned();
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
        Schema::drop('dimension_values');
    }
}
