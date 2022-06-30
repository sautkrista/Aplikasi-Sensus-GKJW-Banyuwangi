<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->String("nik")->unique();
            $table->String("nama");
            $table->String("jenis_kelamin");
            $table->String("tempat_lahir");
            $table->Date("tanggal_lahir");
            $table->String("hub_dalam_kk");
            $table->String("alamat_domisili");
            $table->String("kota_domisili");
            $table->String("no_telp");
            $table->String("tempat_baptis");
            $table->Date("tanggal_baptis")->nullable();
            $table->String("tempat_sidi");
            $table->Date("tanggal_sidi")->nullable();
            $table->Date("tanggal_nikah")->nullable();
            $table->String("profesi");
            $table->String("asal_gereja");
            $table->String("keterangan");
            $table->String("status")->default(0);
            $table->unsignedBigInteger("krw_id");
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
        Schema::dropIfExists('wargas');
    }
}
