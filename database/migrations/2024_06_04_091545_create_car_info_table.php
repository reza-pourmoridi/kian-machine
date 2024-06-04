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
        Schema::create('car_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars');
            $table->text('model')->nullable();
            $table->integer('cylinderCount')->nullable();
            $table->integer('axleCount')->nullable();
            $table->integer('wheelCount')->nullable();
            $table->text('vin')->nullable();
            // ... other car_info table columns
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_info');
    }
};
