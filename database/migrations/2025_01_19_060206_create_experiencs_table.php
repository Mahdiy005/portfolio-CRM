<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiencs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('experince_section_id')->constrained('experienc_sections', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencs');
    }
};
