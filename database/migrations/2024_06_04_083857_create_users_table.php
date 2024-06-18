<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('national_number');
            $table->string('phone_number')->index();
            $table->foreignId('role_id')->constrained('roles');
            $table->integer('status')->nullable();
            $table->string('hashed_pass');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public  function down()
    {
        Schema::dropIfExists('users');
    }
};
