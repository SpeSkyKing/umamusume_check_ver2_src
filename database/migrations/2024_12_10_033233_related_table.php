<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umamusume_acter_table', function (Blueprint $table) {
            $table->integer('acter_id');
            $table->integer('umamusume_id');
            $table->string('acter_name');
            $table->enum('gender',['0','1','2']);
            $table->date('birthday');
            $table->primary('acter_id');
            $table->foreign('umamusume_id')->references('umamusume_id')->on('umamusume_table')->onDelete('cascade');
        });

        Schema::create('scenario_race_table', function (Blueprint $table) {
            $table->integer('umamusume_id');
            $table->integer('race_id');
            $table->integer('race_number');
            $table->foreign('umamusume_id')->references('umamusume_id')->on('umamusume_table')->onDelete('cascade');
            $table->foreign('race_id')->references('race_id')->on('race_table')->onDelete('cascade');
            $table->primary(['umamusume_id','race_id','race_number']);
        });

        Schema::create('regist_umamusume_table', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('umamusume_id');
            $table->foreign('umamusume_id')->references('umamusume_id')->on('umamusume_table')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('user_table')->onDelete('cascade');
            $table->primary(['umamusume_id','user_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umamusume_acter_table');
        Schema::dropIfExists('scenario_race_table');
    }
};
