<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoriteTable extends Migration
{
    public function up(): void
    {
        Schema::create('user_favorite', function (Blueprint $table) {
//            $table->id();
            $table->increments('user_favorite_id');
            $table->integer('user_id');
            $table->integer('favorite_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_favorite');
    }
}
