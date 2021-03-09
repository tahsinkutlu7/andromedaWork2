<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kitap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitaps', function (Blueprint $table) {
            $table->id();
            $table->string('kitapAdi');
            $table->longText('kitapAciklamasi');
            $table->longText('kitapKapagi');
            $table->string('ISBN');
            $table->integer('sayfaSayisi');
            $table->enum('kitapDurum',['aktif','pasif'])->default('aktif');
            $table->timestamps();
            $table->unsignedBigInteger('kategoriId');
            $table->unsignedBigInteger('yazarId');
            $table->unsignedBigInteger('yayinEviId');
            $table->unsignedBigInteger('dilId');
            $table->foreign('kategoriId')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('yazarId')->references('id')->on('yazars')->onDelete('cascade');
            $table->foreign('yayinEviId')->references('id')->on('yayin_evis')->onDelete('cascade');
            $table->foreign('dilId')->references('id')->on('dils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitaps');
    }
}
