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
        Schema::create('user_has_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained();
            $table->unsignedBigInteger("media_id")->nullable();
            $table->foreign("media_id")->references("id")->on("medias");
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
        Schema::dropIfExists('user_has_media');
    }
};
