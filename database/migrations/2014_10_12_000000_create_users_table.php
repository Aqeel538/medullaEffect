<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('company_name')->nullable(true);
            $table->string('website')->nullable(true);
            $table->string('industry')->nullable(true);
            $table->string('contact')->nullable(true);
            $table->string('image')->nullable(true);
            $table->integer('status')->default(0)->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('job_type')->nullable(true);
            $table->string('city')->nullable(true);
            $table->string('state')->nullable(true);
            $table->integer('zip_code')->nullable(true);
            $table->string('located_in')->nullable(true);
            $table->string('relocate')->nullable(true);
            $table->string('mile_range')->nullable(true);
            $table->string('employees')->nullable(true);
            $table->string('employees_limit')->nullable(true);
            $table->string('work_type')->nullable(true);
            $table->string('industry_and_position')->nullable(true);
            $table->string('pay_range')->nullable(true);
            $table->string('experience')->nullable(true);
            $table->string('nationality')->nullable(true);
            $table->string('questionaire_submit')->nullable(true);
            $table->string('resume')->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
