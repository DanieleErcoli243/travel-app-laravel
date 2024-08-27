<?php

use App\Models\Day;
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
            $table->foreignIdFor(Day::class)->nullable()->costrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->string('image')->nullable();
            $table->string('food')->nullable();
            $table->string('interests')->nullable();
            $table->timestamps();
            $table->softDelete();
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
