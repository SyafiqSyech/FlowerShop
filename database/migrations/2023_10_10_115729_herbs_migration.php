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
        Schema::create('herbs', function (Blueprint $table) {
            $table->id('herbsId');
            $table->longText('herbsImage');
            $table->string('herbName');
            $table->decimal('herbPrice', 8, 2);
            $table->longText('herbFact'); 
            $table->string('scientificName'); 
            $table->string('herbOrigin');
            $table->string('herbCollection');
            $table->string('magicalProperty');
            $table->string('watering');
            $table->string('temperature');
            $table->string('sunlight');
            $table->string('soil');
            $table->string('appearance');
            $table->longText('history');
            $table->string('endingDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('herbs');
    }
};
