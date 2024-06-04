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
        Schema::create('driver_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers');
            $table->string('fatherName', 255)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('maritalStatus', 255)->nullable();
            $table->string('province', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('section', 255)->nullable();
            $table->string('education', 255)->nullable();
            $table->string('fieldOfStudy', 255)->nullable();
            $table->string('postalCode', 255)->nullable();
            $table->string('homePhone', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('militaryType', 255)->nullable();
            $table->date('militaryStartDate')->nullable();
            $table->date('militaryEndDate')->nullable();
            $table->string('militaryCardNumber', 255)->nullable();
            $table->date('employmentDate')->nullable();
            $table->string('serviceYears', 255)->nullable();
            $table->tinyInteger('smartCard')->unsigned()->nullable();
            $table->tinyInteger('healthCard')->unsigned()->nullable();
            $table->tinyInteger('busBooklet')->unsigned()->nullable();
            $table->string('update_date', 255)->nullable(); // Assuming update_date is a string
            $table->tinyInteger('status')->unsigned(); // Assuming status is a tinyint with required value
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_info');
    }
};
