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
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->string('full_name');
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->date('birth_date');
            $table->string('blood_group')->nullable();
            $table->string('nid_no');
            $table->string('passport_no')->nullable();
            $table->string('cell_no');
            $table->string('emergency_contact_no')->nullable();
            $table->string('emergency_contact_email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('behance_dribble')->nullable();
            $table->string('portfolio_website')->nullable();
            $table->tinyInteger('completed_profile')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_infos');
    }
};
