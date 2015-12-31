<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLeaveType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_types', function ($table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('description');
            $table->float('days');
            $table->boolean('accrue_days');
            $table->boolean('unlimited_days');
            $table->enum('gender',['male','female']);
            $table->enum('balance',['ignore','carryForward','covertToCash']);
            $table->boolean('inclusive_of_holidays');
            $table->boolean('inclusive_of_saturday');
            $table->boolean('inclusive_of_sunday');
            $table->boolean('off_days');
            $table->float('max_carry_forward_days');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('leave_types');
    }
}
