<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatenationalIDsTable extends Migration
{
    public function up()
    {
        Schema::create('nationalIDs', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('physical_address');
            $table->string('phone_number');
            $table->string('nationality');
            $table->string('document_type');
            $table->json('documents');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nationalIDs');
    }
}

