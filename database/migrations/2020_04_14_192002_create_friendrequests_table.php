<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendrequests', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('sender_user_id');
            $table->foreignId('reciever_user_id');
            $table->timestamps();
            $table->primary(['sender_user_id', 'reciever_user_id']);
            $table->foreign('sender_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('reciever_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friendrequests');
    }
}
