<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('SID');
            $table->string('OfferName');
            $table->string('Description');
            $table->string('Payout');
            $table->string('Type');
            $table->unsignedBigInteger('vertical_id');
            $table->unsignedBigInteger('network_id');
            $table->foreign('vertical_id')->references('id')->on('verticals');
            $table->foreign('network_id')->references('id')->on('networks');
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
        Schema::dropIfExists('offers');
    }
};
