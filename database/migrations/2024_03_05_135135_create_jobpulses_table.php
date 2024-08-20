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
        Schema::create('jobpulses', function (Blueprint $table) {
            $table->id('jobpulse_id');
            $table->string('about_company_img');
	        $table->longText('about_company_history');
	        $table->longText('about_company_vision');
	        $table->timestamps();

            // Add index
            $table->index('jobpulse_id');
            $table->index('about_company_img');
            $table->index('about_company_history');
            $table->index('about_company_vision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobpulses');
    }
};
