<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email',50)->unique();
            $table->string('phone_number',15)->unique();
            $table->text('address');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('job_id')->on('jobs');
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
        Schema::dropIfExists('employees');
    }
};
