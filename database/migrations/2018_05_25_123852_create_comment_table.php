<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment_text');
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')->on('user')
                ->onDelete('cascade');


            $table->foreign('post_id')
            ->references('id')->on('post')
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
        Schema::dropIfExists('comment');
    }
}
