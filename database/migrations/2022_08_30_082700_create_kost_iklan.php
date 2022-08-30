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
        Schema::create('kost_iklan', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->integer('listrik');
            $table->string('fasilitas');
            $table->string('keuntungan');
            $table->string('catatan');
            $table->decimal('harga', 10, 2);
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
        Schema::dropIfExists('kost_iklan');
    }
};
