<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_buku')->unsigned();
            $table->bigInteger('id_member')->unsigned();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->boolean('is_back');
            $table->timestamps();

            $table->foreign('id_buku')->references('id_buku')->on('books');
            $table->foreign('id_member')->references('id_member')->on('members');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrows');
    }
}
