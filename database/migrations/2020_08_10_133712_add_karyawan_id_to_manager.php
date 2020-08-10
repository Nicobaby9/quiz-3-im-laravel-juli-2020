<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKaryawanIdToManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manager', function (Blueprint $table) {
            $table->unsignedBigInteger('karyawan_id')->nullable();
            $table->unsignedBigInteger('proyek_id')->nullable();

            $table->foreign('karyawan_id')->references('id')->on('karyawan');
            $table->foreign('proyek_id')->references('id')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manager', function (Blueprint $table) {
            $table->dropForeign(['karyawan_id']);
            $table->dropForeign(['proyek_id']);

            $table->dropColumn(['karyawan_id']);
            $table->dropColumn(['proyek_id']);
        });
    }
}
