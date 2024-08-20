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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('company_name');
            $table->string('job_title');
            $table->enum('role', ['Developer', 'Designers', 'Marketers', 'UI/UX', 'Others']);
            $table->enum('job_type', ['Full-Time', 'Onsite', 'Remote', 'Contact-Basis']);
            $table->integer('vacancy')->nullable();
            $table->date('deadline')->nullable();
            $table->json('required_skills')->nullable();;
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->text('responsibility')->nullable();
            $table->text('qualifications')->nullable();
            $table->string('salary');
            $table->tinyInteger('active_status')->default(1);
            $table->timestamps();

            // Add index
            $table->index('id');
            $table->index('user_id');
            $table->index('company_id');
            $table->index('job_title');
            $table->index('role');
            $table->index('job_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
