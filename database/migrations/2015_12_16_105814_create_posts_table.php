<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->text('excerpt');
            $table->integer('user_id')->unsigned()->default(0);
            $table->text('seo_title')->default('');
            $table->text('meta')->default('');
            $table->string('images');
            $table->integer('sequence')->default(0);
            $table->timestamps();
            $table->timestamp('published_at');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
