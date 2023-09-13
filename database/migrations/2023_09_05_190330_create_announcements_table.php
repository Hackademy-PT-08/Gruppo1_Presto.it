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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->float('price');

            $table->foreignId('user_id')
                ->nullable()
                ->costrained()
                ->onDelete('cascade');

            $table->foreignId('category_id')
                ->nullable()
                ->costrained()
                ->onDelete('cascade');

            $table->boolean('is_revised')->default(false);
            $table->boolean('deleting')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
