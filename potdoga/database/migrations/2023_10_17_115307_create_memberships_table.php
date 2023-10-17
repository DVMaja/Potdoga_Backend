<?php

use App\Models\Membership;
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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id('member_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('club_id')->references('club_id')->on('clubs');
            $table->timestamps();
        });

        Membership::create([
            'user_id' => 1,
            'club_id' => 1
        ]);

        Membership::create([
            'user_id' => 2,
            'club_id' => 2
        ]);

        Membership::create([
            'user_id' => 3,
            'club_id' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
