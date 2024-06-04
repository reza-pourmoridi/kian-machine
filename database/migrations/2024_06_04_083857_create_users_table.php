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
            $table->string('phone_number')->index();
            $table->string('password');
            $table->integer('status');
            $table->string('name');
            $table->foreignId('role_id')->constrained('roles');
            $table->string('email');
            $table->string('adress');
            $table->string('avatar')->nullable();
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
