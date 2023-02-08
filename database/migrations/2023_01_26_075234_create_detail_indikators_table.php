<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_indikators', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_id');
            $table->string('indikator_1');
            $table->string('dokumen_indikator_1');
            $table->string('indikator_2');
            $table->string('dokumen_indikator_2');
            $table->string('indikator_3');
            $table->string('dokumen_indikator_3');
            $table->string('indikator_4');
            $table->string('dokumen_indikator_4');
            $table->string('indikator_5');
            $table->string('dokumen_indikator_5');
            $table->string('indikator_6');
            $table->string('dokumen_indikator_6');
            $table->string('indikator_7');
            $table->string('dokumen_indikator_7');
            $table->string('indikator_8')->nullable();
            $table->string('dokumen_indikator_8')->nullable();
            $table->enum('status', ['selesai', 'belum selesai'])->default('belum selesai');
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
        Schema::dropIfExists('detail_indikators');
    }
};
