<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizenshipApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('citizenship_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('class');
            $table->string('application_form');
            $table->string('finger_prints');
            $table->string('covering_letter');
            $table->string('residence_permit_or_birth_certificate')->nullable();
            $table->string('passport_photo_1');
            $table->string('passport_photo_2');
            $table->string('non_swazi_pin')->nullable();
            $table->string('covering_letter_from_husband')->nullable();
            $table->string('husband_birth_certificate')->nullable();
            $table->string('marriage_certificate')->nullable();
            $table->string('husband_pin')->nullable();
            $table->string('wife_pin')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('parents_citizenship_status')->nullable();
            $table->string('passport_number')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citizenship_applications');
    }
}
