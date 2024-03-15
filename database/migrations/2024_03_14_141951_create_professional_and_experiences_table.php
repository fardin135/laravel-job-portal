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
        Schema::create('professional_and_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade');
            $table->string('training_name')->nullable();
            $table->string('training_institution_name')->nullable();
            $table->string('training_completed_year')->nullable();

            $table->string('job_exp_designation')->nullable();
            $table->string('job_exp_company_name')->nullable();
            $table->string('job_exp_joining_date')->nullable();
            $table->string('job_exp_departure_date')->nullable();
            $table->text('skills')->nullable();
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_and_experiences');
    }
};
