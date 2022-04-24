<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEoRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eo_registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->string("nama_event");
            $table->text("tempat_penyelenggaraan");
            $table->dateTime("tanggal_penyelenggaraan");
            $table->string("jenis_kendaraan");
            $table->enum("klasifikasi_lomba", ["Internasional", "Regional", "Nasional", "Club"]);
            $table->text("deskripsi_lomba");
            $table->json("oc");
            $table->string("oc_signature");
            $table->json("rc");
            $table->string("rc_signature");
            $table->json("sc");
            $table->string("sc_signature");
            $table->string("sponsor_tunggal");
            $table->string("sponsor_utama");
            $table->json("sponsor_dontaur_lain");
            $table->text("hubungan_sponsor_penyelenggara");
            $table->json("kelas_lomba");
            $table->json("penghargaan");
            $table->softDeletes();
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
        Schema::dropIfExists('eo_registration_forms');
    }
}
