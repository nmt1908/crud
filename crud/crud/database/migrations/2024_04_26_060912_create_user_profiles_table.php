<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_profile', function (Blueprint $table) {
//            $table->id();
            $table->increments('user_profile_id');
            $table->integer('user_id');
            $table->string('first_name', 55);
            $table->string('last_name', 55);
            $table->tinyInteger('sex')->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('address', 255)->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
