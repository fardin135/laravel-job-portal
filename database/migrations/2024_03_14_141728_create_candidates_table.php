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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('completed_basic_infos')->default(0);
            $table->tinyInteger('completed_edu_infos')->default(0);
            $table->tinyInteger('completed_professional_infos')->default(0);
            $table->timestamps();

            // Add index
            $table->index('id');
            $table->index('user_id');
            $table->index('completed_basic_infos');
            $table->index('completed_edu_infos');
            $table->index('completed_professional_infos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
