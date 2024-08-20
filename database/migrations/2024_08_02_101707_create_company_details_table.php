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
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('company_name');
            $table->string('company_image')->nullable();
            $table->string('company_mobile_num');
            $table->string('company_location')->nullable();
            $table->string('current_employees')->nullable();
            $table->string('company_mission')->nullable();
            $table->string('company_vision')->nullable();
            $table->string('company_history')->nullable();
            $table->timestamps();

            // Add index
            $table->index('id');
            $table->index('user_id');
            $table->index('company_id');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_details');
    }
};
