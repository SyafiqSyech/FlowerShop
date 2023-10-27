<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('transactionsDetail', function (Blueprint $table) {
            $table->id('transDetailId');
            $table->bigInteger('transId')->unsigned();
            $table->foreign('transId')->references('transId')->on('transactions');
            $table->bigInteger('herbsId')->unsigned();
            $table->foreign('herbsId')->references('herbsId')->on('herbs');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('transactionsDetail');
    }
};
