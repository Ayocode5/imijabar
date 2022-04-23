<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKisRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kis_registration_forms', function (Blueprint $table) {
            $table->id();
            $table->string("nomor_kartu_identitas")->nullable();
            $table->string("kota_kartu_identitas")->nullable();
            $table->string("nomor_passport")->nullable();
            $table->string("nama");
            $table->string("email");
            $table->string("tempat_tgl_lahir");
            $table->enum("gender", ["L","P"]);
            $table->enum("golongan_darah", ["A+", "B+", "AB+", "O+","A-", "B-", "AB-", "O-"]);
            $table->string("pendidikan");
            $table->text("alamat_jalan1");
            $table->text("alamat_jalan2");
            $table->text("alamat_kota");
            $table->text("alamat_provinsi");
            $table->text("alamat_kodepos");
            $table->string("telp");
            $table->enum("jenis_sim", ["A","B","C"]);
            $table->string("nomor_sim");
            $table->string("tempat_dikeluarkan_sim");
            $table->enum("iuran_anggota", ["1","2","3"]);
            $table->string("nomor_kta");
            $table->text("pas_photo");
            $table->text("photo_kartu_identitas");
            $table->text("photo_sk_orangtua")->nullable();
            $table->string("signature_pemohon");
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
        Schema::dropIfExists('kis_registration_forms');
    }
}
