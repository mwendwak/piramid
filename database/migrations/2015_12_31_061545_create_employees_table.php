<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function($table) {
            $table->increments('id');
            $table->string('employee_no');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('job_title');
            $table->string('address');
            $table->string('city');
            $table->text('post_code');
            $table->string('county');
            $table->string('phone_no');
            $table->string('mobile_phone_no');
            $table->string('e-mail');
            $table->enum('gender',['male','female']);
            $table->text('manager_no');
            $table->date('employment_date');
            $table->enum('status',['active','inactive']);
            $table->date('inactive_date');
            $table->text('created_by');
            $table->boolean('active');
            $table->boolean('registered');
            $table->integer('user_id')->unsigned();
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
        Schema::drop('employees');
    }
}
