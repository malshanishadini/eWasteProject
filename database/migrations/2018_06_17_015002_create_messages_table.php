<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender')->unsigned();
            $table->integer('receiver')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->text('message_body');
            $table->timestamps();


            $table->foreign('post_id')
                ->references('id')->on('post')
                ->onDelete('cascade');

            $table->foreign('sender','receiver')
                ->references('id')->on('user')
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
        Schema::dropIfExists('messages');
    }
}
