<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agency_id')->unsigned();
            $table->string('eGarnishments')->nullable();
            $table->string('siteConstants')->nullable();
            $table->string('siteInfo')->nullable();
            $table->string('userInfo')->nullable();
            $table->string('wscontrol')->nullable();
            $table->string('wsusers')->nullable();
            $table->string('eWarrants')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('caseLook')->nullable();
            $table->string('epayments')->nullable();
            $table->string('mobile_scheduler')->nullable();
            $table->string('kiosk_software')->nullable();
            $table->string('marriage_application')->nullable();
            $table->string('efiling')->nullable();
            $table->string('probation_check_in')->nullable();
            $table->string('court_check_in')->nullable();
            $table->string('daily_docket')->nullable();
            $table->string('holiday_schedule')->nullable();
            $table->string('bond_schedule')->nullable();
            $table->string('court_rules')->nullable();
            $table->timestamps();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
