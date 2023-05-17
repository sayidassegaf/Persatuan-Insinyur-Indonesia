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
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->string('pii_membership_no');
            $table->date('pii_membership_issued_date');
            $table->string('ip_no');
            $table->date('ip_issued_date');
            $table->string('bk_name');
            $table->date('graduation_date');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('nik');
            $table->date('nik_issued_date');
            $table->string('passport_number')->nullable();
            $table->date('passport_issued_date')->nullable();
            $table->string('title');
            $table->string('citizenship');
            $table->text('experience')->nullable();
            $table->text('specific_experience')->nullable();
            $table->string('home_address');
            $table->string('home_country');
            $table->string('home_province');
            $table->string('home_city');
            $table->string('home_postal_code');
            $table->string('home_email');
            $table->string('home_phone_number');
            $table->string('home_whatsapp_number');
            $table->string('home_instagram');
            $table->string('office_address')->nullable();
            $table->string('office_country')->nullable();
            $table->string('office_province')->nullable();
            $table->string('office_city')->nullable();
            $table->string('office_postal_code')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_phone_number')->nullable();
            $table->string('office_whatsapp_number')->nullable();
            $table->string('office_instagram')->nullable();
            $table->string('banchelor_university')->nullable();
            $table->string('banchelor_field')->nullable();
            $table->date('banchelor_start_date')->nullable();
            $table->date('banchelor_end_date')->nullable();
            $table->string('master_university')->nullable();
            $table->string('master_field')->nullable();
            $table->date('master_start_date')->nullable();
            $table->date('master_end_date')->nullable();
            $table->string('dectorate_university')->nullable();
            $table->string('dectorate_field')->nullable();
            $table->date('dectorate_start_date')->nullable();
            $table->date('dectorate_end_date')->nullable();
            $table->string('discipline_regis')->nullable();
            $table->string('signature')->nullable();
            $table->boolean('is_valid')->default(false);

            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_forms');
    }
};
