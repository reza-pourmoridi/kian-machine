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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 255);
            $table->string('lastName', 255);
            $table->string('nationalId', 255);
            $table->string('mobilePhone', 255);
            $table->integer('company_id')->unsigned()->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('cat_id')->unsigned()->nullable();
            $table->integer('subcat_id')->unsigned()->nullable();
            $table->string('driver_pic', 500)->nullable();
            $table->string('licenseType', 255)->nullable();
            $table->string('licenseNumber', 255)->nullable();
            $table->string('licenseValidityDate', 255)->nullable();
            $table->string('documentPhoto', 255)->nullable();
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
        Schema::dropIfExists('drivers');
    }
};
