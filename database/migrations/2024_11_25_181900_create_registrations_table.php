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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->boolean('privacy_policy');
            $table->string('full_name');
            $table->string('district_origin');
            $table->string('current_residence');
            $table->string('full_address');
            $table->enum('employment_status', ['yes', 'no_studying', 'no_job_seeking']);
            $table->string('last_school')->nullable();
            $table->string('major')->nullable();
            $table->string('class_or_semester')->nullable();
            $table->string('whatsapp_contact');
            $table->string('telegram_contact')->nullable();
            $table->string('instagram')->nullable();
            $table->text('motivation');
            $table->string('referral_source')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
