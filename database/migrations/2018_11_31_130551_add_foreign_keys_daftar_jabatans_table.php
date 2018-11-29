<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysDaftarJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('daftars_jabatans', function (Blueprint $table) {
          $table->foreign('daftar_id')->references('id')->on('daftars');
          $table->foreign('jabatan_id')->references('id')->on('jabatans');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
