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
        Schema::create('umamusume_table', function (Blueprint $table) {
            $table->integer('umamusume_id'); //ID
            $table->string('umamusume_name'); //名前
            $table->enum('turf_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('dirt_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('front_runner_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('early_foot_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('midfield_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('closer_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('sprint_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('mile_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('classic_aptitude',['A','B','C','D','E','F','G']);
            $table->enum('long_distance_aptitude',['A','B','C','D','E','F','G']);
            $table->primary('umamusume_id');
        });

        Schema::create('race_table', function (Blueprint $table) {
            $table->integer('race_id');
            $table->string('race_name');
            $table->boolean('race_state');
            $table->enum('distance',['1','2','3','4']);
            $table->smallInteger('distance_detail');
            $table->smallInteger('num_fans');
            $table->boolean('senior_flag');
            $table->boolean('classic_flag');
            $table->boolean('junior_flag');
            $table->smallInteger('race_months');
            $table->boolean('half_flag');
            $table->primary('race_id');
        });

        Schema::create('user_table', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('password');
            $table->string('email');
            $table->string('phone_number');
            $table->string('user_image');
            $table->date('birthday');
            $table->enum('gender',['0','1','2']);
            $table->string('location');
            $table->string('country');
            $table->boolean('state');
            $table->boolean('role');
            $table->primary('user_id');
        });

        Schema::create('live_table', function (Blueprint $table) {
            $table->integer('live_id');
            $table->string('live_name');
            $table->string('composer');
            $table->string('arrager');
            $table->string('phrase');
            $table->primary('live_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regist_umamusume_race_table');

        Schema::dropIfExists('user_security_table');
        Schema::dropIfExists('user_history_table');
        Schema::dropIfExists('regist_umamusume_table');
        Schema::dropIfExists('umamusume_acter_table');
        Schema::dropIfExists('scenario_race_table');
        Schema::dropIfExists('vocal_umamusume_table');

        Schema::dropIfExists('umamusume_table');
        Schema::dropIfExists('race_table');
        Schema::dropIfExists('user_table');
        Schema::dropIfExists('live_table');
    }
};
