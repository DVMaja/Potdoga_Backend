<?php

use App\Models\Club;
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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id('club_id');
            $table->year('establishment');
            $table->string('location');
            $table->integer('max_number');
            $table->timestamps();
        });

        Club::create([
            'establishment' => 2000, 
            'location' => 'valahol', 
            'max_number' => 30,                       
        ]);

        Club::create([
            'establishment' => 2004, 
            'location' => 'valahol2', 
            'max_number' => 20,                       
        ]);

        Club::create([
            'establishment' => 1999, 
            'location' => 'valahol 3', 
            'max_number' => 15,                       
        ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
