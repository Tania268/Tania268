<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportsTable extends Migration
{
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('physical_address');
            $table->string('phone_number');
            $table->string('department');
            $table->json('documents'); // To store file paths for uploaded documents
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passports');
    }
}
