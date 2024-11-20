<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('program_contents', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->foreignId('program_id')->constrained('programs')->onDelete('cascade'); // Foreign Key ke `programs`
        $table->string('photo'); // Path Foto Kegiatan
        $table->text('description'); // Deskripsi Foto Kegiatan
        $table->timestamps(); // Created At & Updated At
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_contents');
    }
};
