<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("quisioner_id");
            $table->unsignedBigInteger("warga_id");
            $table->String("jawaban");
            $table->Date("tanggal");
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
        Schema::dropIfExists('sensuses');
    }
}
