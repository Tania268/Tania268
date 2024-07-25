<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleServicesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicle_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('location');
            $table->string('phone');
            $table->integer('age');
            $table->string('service_type');
            $table->string('police_report')->nullable();
            $table->string('damaged_licence')->nullable();
            $table->string('application_form')->nullable();
            $table->string('graded_tax')->nullable();
            $table->string('residential_permit')->nullable();
            $table->string('drivers_licence')->nullable();
            $table->string('passport')->nullable();
            $table->string('motor_vehicle_particulars')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('representative_id')->nullable();
            $table->string('police_clearance')->nullable();
            $table->string('receipt_for_engine')->nullable();
            $table->string('bluebook')->nullable();
            $table->string('general_receipt')->nullable();
            $table->string('roadworthiness_certificate')->nullable();
            $table->string('tax_clearance_certificate')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicle_services');
    }
}
