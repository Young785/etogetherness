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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ["male", "female"]);
            $table->enum('looking_for', ["male", "female"]);
            // $table->string('other_name');
            $table->string('nick_name');
            $table->string('phone');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('seeking_age_from')->nullable();
            $table->string('seeking_age_to')->nullable();
            $table->string('last_seen')->nullable();
            $table->enum('online_status', ["0", "1"])->default("1");
            $table->string('user_image')->nullable();
            $table->string('age')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_secid');
            $table->enum('user_type', ["user", "admin"])->default("user");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
