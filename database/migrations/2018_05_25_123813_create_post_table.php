
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('attachment')->nullable();
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedInteger('publisher_id'); 
            $table->unsignedInteger('waste_id');

            $table->timestamps();
            $table->rememberToken();

           
            // $table->unsignedBigInteger('view_count')->default(0);
          
            $table->softDeletes();


            $table->foreign('publisher_id')
                ->references('id')->on('user')
                ->onDelete('cascade');


                $table->foreign('waste_id')
                ->references('id')->on('waste')
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
        Schema::dropIfExists('post');
    }
}
