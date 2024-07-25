<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('civil_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('full_name');
            $table->integer('age');
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('id_or_passport');
            $table->string('proof_of_residence');
            $table->string('picture_or_photo');
            $table->string('witness_1')->nullable();
            $table->string('witness_2')->nullable();
            $table->string('proof_of_birth')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('civil_registrations');
    }
}
