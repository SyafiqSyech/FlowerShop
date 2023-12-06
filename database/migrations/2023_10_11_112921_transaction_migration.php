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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transId');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('userId')->on('users');
            $table->string('paymentMethod');
            $table->string('courier');
            $table->string('address'); 
            $table->string('city'); 
            $table->string('state');
            $table->string('zipcode');
            $table->string('country');
            $table->decimal('totalPrice', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('transactions');
    }
};
