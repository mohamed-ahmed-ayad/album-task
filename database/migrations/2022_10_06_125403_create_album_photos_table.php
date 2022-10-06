<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumPhotosTable extends Migration
{
    
    public function up()
    {
         Schema::create('album_photos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('path', 100)->nullable();
            $table->bigInteger('album_id')->unsigned()->nullable();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('set null');

            $table->timestamps();
        });
    }
 
    public function down()
    {
        Schema::dropIfExists('album_photos');
    }
}
