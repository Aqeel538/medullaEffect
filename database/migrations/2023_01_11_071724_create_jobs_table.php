<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(true);
            $table->string('category_id')->nullable(true);
            $table->string('title')->nullable(true);
            $table->string('company_name')->nullable(true);
            $table->string('rate')->nullable(true);
            $table->string('job_type')->nullable(true);
            $table->string('work_type')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('state')->nullable(true);
            $table->integer('zip_code')->nullable(true);
            $table->string('discription')->nullable(true);
            $table->integer('status')->nullable(true);
            $table->string('image')->nullable(true);
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
        Schema::dropIfExists('jobs');
    }
}
