<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('test_id');
            $table->double('cost',7,2);
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->foreign('test_id')->references('id')->on('tests');
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
        Schema::dropIfExists('hospital_tests');
    }
}
