<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->integer('testing_id');
            $table->string('category');
            $table->string('test_detail');
            $table->string('reguest_by');
            $table->string('module');
            $table->string('technical_support');
            $table->string('leader');
            $table->string('start_date');
            $table->string('status');
            $table->string('end_date');
            $table->string('progress');
            $table->string('remark');
            $table->string('upload');
            $table->string('members');
            $table->string('isbuplic')->default('1');
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
        Schema::dropIfExists('registers');
    }
}
