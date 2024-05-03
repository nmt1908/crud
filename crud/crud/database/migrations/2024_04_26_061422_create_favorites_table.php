<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    public function up(): void
    {
        Schema::create('favorites', function (Blueprint $table) {
//            $table->id();
            $table->increments('favorite_id');
            $table->string('favorite_name', 255);
            $table->text('favorite_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
