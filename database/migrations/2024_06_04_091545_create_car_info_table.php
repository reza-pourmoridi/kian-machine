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
        Schema::create('car_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');
            $table->text('model')->nullable();
            $table->integer('cylinderCount')->nullable();
            $table->integer('axleCount')->nullable();
            $table->integer('wheelCount')->nullable();
            $table->text('vin')->nullable();

            $table->string('engineNumber')->nullable();
            $table->string('chassisNumber')->nullable();
            $table->text('bodyNumber')->nullable();
            $table->integer('plateYear')->nullable();
            $table->string('color')->nullable();
            $table->string('fuel')->nullable();
            $table->string('countryOfManufacture')->nullable();
            $table->string('ownership')->nullable();
            $table->string('nationalId')->nullable();
            $table->string('registrationNumber')->nullable();

            $table->date('purchaseDate')->nullable();
            $table->string('unitCode')->nullable();
            $table->timestamp('register_date')->nullable();
            $table->string('tireBody', 255)->nullable();
            $table->tinyInteger('carBody')->nullable();
            $table->tinyInteger('shieldBody')->nullable();
            $table->tinyInteger('glassBody')->nullable();
            $table->tinyInteger('motorBody')->nullable();
            $table->tinyInteger('ampBody')->nullable();
            $table->tinyInteger('lightingBody')->nullable();
            $table->tinyInteger('seatBody')->nullable();
            $table->tinyInteger('voiceBody')->nullable();
            $table->tinyInteger('coolerBody')->nullable();
            $table->tinyInteger('codeBody')->nullable();
            $table->timestamps();

        });

//        22	ownership	varchar(50)	utf8_persian_ci		Yes	NULL			Change Change	Drop Drop
//        23	nationalId	varchar(50)	utf8_persian_ci		Yes	NULL			Change Change	Drop Drop
//        24	registrationNumber	varchar(50)	utf8_persian_ci		Yes	NULL			Change Change	Drop Drop
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_infos');
    }
};
