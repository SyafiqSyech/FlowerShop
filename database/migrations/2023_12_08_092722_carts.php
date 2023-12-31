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
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cartsId');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('userId')->on('users');
            $table->bigInteger('herbsId')->unsigned();
            $table->foreign('herbsId')->references('herbsId')->on('herbs');
            $table->longText('herbsImage');
            $table->string('herbName');
            $table->decimal('herbPrice', 8, 2);
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
        Schema::dropIfExists('carts');
    }
};