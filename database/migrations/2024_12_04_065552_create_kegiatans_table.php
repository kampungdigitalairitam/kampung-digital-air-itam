<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('kegiatans', function (Blueprint $table) {
        $table->id();
        $table->string('tumbnail_image'); // Gambar thumbnail
        $table->string('title'); // Judul kegiatan
        $table->text('description'); // Keterangan thumbnail
        $table->json('content_images')->nullable(); // Gambar konten dalam bentuk array JSON
        $table->json('content_descriptions')->nullable(); // Deskripsi konten dalam bentuk array JSON
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('kegiatans');
}


   
};
