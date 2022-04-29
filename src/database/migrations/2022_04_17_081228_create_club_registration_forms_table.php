<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string("nama_klub");
            $table->string("email");
            $table->text("alamat_jalan");
            $table->text("alamat_kel_kec");
            $table->text("alamat_kota");
            $table->text("alamat_provinsi");
            $table->text("alamat_kodepos");
            $table->json("anggota_inti");
            $table->json("anggota");
            $table->text("signature_ketua_anggota");
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
        Schema::dropIfExists('club_registration_forms');
    }
}
