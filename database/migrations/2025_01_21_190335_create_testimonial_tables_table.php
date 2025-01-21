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
        Schema::create('testimonial_tables', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->text('user_name');
            $table->text('position');
            $table->foreignId('testimonial_section_id')->constrained('testimonial_sections', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_tables');
    }
};
