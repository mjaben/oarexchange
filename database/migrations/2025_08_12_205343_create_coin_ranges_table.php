<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_ranges', function (Blueprint $table) {
            $table->id();
            $table->string('coin_id');
            $table->string('buy');
            $table->string('sell');
            $table->bigInteger('min_amount');
            $table->bigInteger('max_amount');
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
        Schema::dropIfExists('coin_ranges');
    }
}