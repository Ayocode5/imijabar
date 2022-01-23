<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
            $table->text('applicant_first_name');
            $table->text('applicant_last_name');
            $table->text('applicant_email');
            $table->text('applicant_phone');
            $table->text('applicant_country');
            $table->text('applicant_state');
            $table->text('applicant_street');
            $table->text('applicant_city');
            $table->text('applicant_zip_code');
            $table->text('applicant_expected_salary');
            $table->text('applicant_cover_letter');
            $table->text('applicant_cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
}
