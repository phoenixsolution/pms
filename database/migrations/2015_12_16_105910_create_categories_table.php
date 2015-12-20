<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->text('excerpt');
            $table->integer('user_id')->unsigned()->nullable();
            $table->text('seo_title')->default('');
            $table->text('meta')->default('');
            $table->string('images');
            $table->integer('sequence')->default(0);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
