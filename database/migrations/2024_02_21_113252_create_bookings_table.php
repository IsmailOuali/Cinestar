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
        Schema::disableForeignKeyConstraints();
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer("member_id");
            $table->foreignId("film_id")
                ->constrained("films");
            $table->foreignId("seat_id")
                ->constrained("seats");
            $table->timestamps();

            $table->foreign('member_id')->references('member_id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
