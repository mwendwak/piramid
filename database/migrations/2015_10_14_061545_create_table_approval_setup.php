<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApprovalSetup extends Migration
{
    public function up()
    {
        Schema::create('approval_setup', function($table){
        $table->increments('id');
        $table->text('due_date_formula');
        $table->string('approval_administrator');
        $table->boolean('request_rejection_comment');
        $table->boolean('approvals');
        $table->boolean('cancellations');
        $table->boolean('rejections');
        $table->boolean('delegations');
        $table->time('last_run_time');
        $table->date('last_run_date');
    });
    }

    public function down()
    {
        Schema:drop('approval_setup');
    }
}
