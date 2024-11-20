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
    Schema::create('programs', function (Blueprint $table) {
        $table->id(); // Primary Key
        $table->string('title'); // Judul Program
        $table->string('thumbnail'); // Path Thumbnail
        $table->text('description'); // Deskripsi Program
        $table->timestamps(); // Created At & Updated At
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
