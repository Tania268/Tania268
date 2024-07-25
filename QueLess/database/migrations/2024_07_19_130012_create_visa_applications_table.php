<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('visa_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('full_name');
            $table->integer('age');
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('completed_form')->nullable();
            $table->string('police_certificate')->nullable();
            $table->string('passport_photo_1')->nullable();
            $table->string('passport_photo_2')->nullable();
            $table->string('medical_references')->nullable();
            $table->string('employer_motivation_letter')->nullable();
            $table->string('qualification_copies')->nullable();
            $table->string('position_proof')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visa_applications');
    }
}
