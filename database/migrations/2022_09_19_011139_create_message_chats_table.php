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
        Schema::create('message_chats', function (Blueprint $table) {
            $table->id();
            $table->integer('message_id')->nullable();
            $table->integer('sender_id');
            $table->integer('receiver_id');
            $table->integer('message_secid');
            $table->string('messages')->nullable();
            $table->string('file_uploaded')->nullable();
            $table->enum('status', ["0", "1"])->default("0");
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
        Schema::dropIfExists('message_chats');
    }
};
