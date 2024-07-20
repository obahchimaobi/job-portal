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
            $table->string('candidate_name');
            $table->string('candidate_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('candidate_password');
            $table->rememberToken();
            $table->string('image')->nullable();
            $table->string('job_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_category')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('age')->nullable();
            $table->string('language')->nullable();
            $table->longText('about')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('full_address')->nullable();
            $table->timestamps();
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
