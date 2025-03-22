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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            Schema::create('appointments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Patient
                $table->foreignId('doctor_id')->nullable()->constrained('users')->onDelete('set null'); // Doctor (if applicable)
                $table->dateTime('date'); // Appointment date and time
                $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending'); // Status
                $table->text('notes')->nullable(); // Additional information
                $table->timestamps();
            });
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
