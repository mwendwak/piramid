<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLeaveApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_applications', function($table){
            $table->increments('id');
            $table->string('employee_no');
            $table->string('leave_type');
            $table->integer('days_applied');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('application_date');
            $table->integer('approved_days');
            $table->date('approved_start_date');
            $table->date('approved_end_date');
            $table->date('approved_return_date');
            $table->boolean('verified_by_manager');
            $table->date('verification_date');
            $table->enum('status',['pending','approved','rejected','canceled']);
            $table->date('approval_date');
            $table->string('comments');
            $table->boolean('taken');
        });
    }

    public function down()
    {
        Schema::drop('leave_applications');
    }
}
