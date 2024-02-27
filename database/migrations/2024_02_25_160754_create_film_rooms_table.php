<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('film_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId("film_id")
                ->constrained("films")
                ->cascadeOnDelete();
            $table->foreignId("room_id")
                ->constrained("rooms")
                ->cascadeOnDelete();
            $table->boolean("is_full")->default(false);
            $table->datetime("screening_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_rooms');
    }
};
