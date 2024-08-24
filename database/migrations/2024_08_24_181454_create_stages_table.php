<?php

use App\Models\Days;
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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Days::class)->nullable()->costrained()->cascadeOnDelete();
            $tabel->string('title');
            $table->text('description');
            $table->date('date');
            $table->string('image')->nullable();
            $table->string('food')->nullable();
            $table->string('interests')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
