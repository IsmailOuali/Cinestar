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
        Schema::disableForeignKeyConstraints();
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->text("description");
            $table->string("duration");
            $table->date("year");
            $table->string("country");
            $table->string("language");
            $table->string("genre");
            $table->text("actors");
            $table->date("screening_date");
            $table->foreignId("category_id")
                ->constrained("categories")->cascadeOnDelete();
            $table->foreignId("room_id")
                ->constrained("rooms");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
