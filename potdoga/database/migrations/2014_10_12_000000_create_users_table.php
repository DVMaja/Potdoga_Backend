<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();            
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => "Nagy Péter", 
            'email' => 'peti@gmail.com',                        
        ]);

        User::create([
            'name' => "Kiss Bogi", 
            'email' => 'bogi@gmail.com',                        
        ]);

        User::create([
            'name' => "Szegedi Linda", 
            'email' => 'linda@gmail.com',                        
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
