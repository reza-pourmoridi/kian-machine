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
        Schema::create('driver_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('drivers');
            $table->string('fatherName', 255)->nullable();
            $table->string('birthdate', 255)->nullable();

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
            $table->string('militaryStartDate', 255)->nullable();
            $table->string('militaryEndDate', 255)->nullable();
            $table->string('militaryCardNumber', 255)->nullable();
            $table->string('employmentDate', 255)->nullable();
            $table->string('serviceYears', 255)->nullable();
            $table->tinyInteger('smartCard')->unsigned()->nullable();
            $table->tinyInteger('healthCard')->unsigned()->nullable();
            $table->tinyInteger('busBooklet')->unsigned()->nullable();
            $table->tinyInteger('status')->unsigned(); // Assuming status is a tinyint with required value
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
        Schema::dropIfExists('driver_infos');
    }
};
