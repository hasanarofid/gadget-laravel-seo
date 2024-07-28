<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComparetipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compare', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->integer('kategori_id');
            $table->string('title');
            $table->string('landing');
            $table->text('diskipsi');
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
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
        Schema::dropIfExists('compare');
    }
}
