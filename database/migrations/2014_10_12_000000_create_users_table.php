<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('image');
            $table->date('birth_date');
            $table->string('academic_qualifications');
            $table->text('definition');
            $table->string('gender');
            $table->boolean('activation');
            $table->integer('parent_id');
            $table->unsignedInteger('status_id');
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
