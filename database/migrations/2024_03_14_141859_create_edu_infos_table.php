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
        Schema::create('edu_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->string('bachelor_degree_type')->nullable();
            $table->string('bachelor_institution_name')->nullable();
            $table->string('bachelor_department')->nullable();
            $table->date('bachelor_passing_year')->nullable();
            $table->string('bachelor_cgpa')->nullable();

            $table->string('hsc_institution_name')->nullable();
            $table->date('hsc_passing_year')->nullable();
            $table->string('hsc_cgpa')->nullable();

            $table->string('ssc_institution_name')->nullable();
            $table->date('ssc_passing_year')->nullable();
            $table->string('ssc_cgpa')->nullable();

            $table->timestamps();

            // Add index
            $table->index('id');
            $table->index('user_id');
            $table->index('candidate_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edu_infos');
    }
};
