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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('contact_id');
            $table->string('contact_form_name');
	        $table->string('contact_form_email');
	        $table->string('contact_form_subject');
	        $table->string('contact_form_mobile');
            $table->longText('contact_form_query');
	        $table->timestamps();
            
            // Add  index
            $table->index('contact_form_email');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
