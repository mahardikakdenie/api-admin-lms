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
        Schema::table("registrants", function (Blueprint $table) {
            $table->foreignId("institution_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("registrants", function (Blueprint $table) {
            $table->dropForeign(["institution_id"]);
            $table->dropColumn("institution_id");
        });
    }
};
