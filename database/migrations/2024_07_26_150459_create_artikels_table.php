<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('konten');
            $table->unsignedBigInteger('menu_id');
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
