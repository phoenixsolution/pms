<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries',
            function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('gallery_collection_id')->unsigned();
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->integer('sequence')->default(0);
            $table->timestamps();
            $table->foreign('gallery_collection_id')
                ->references('id')
                ->on('gallery_collections')
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
        Schema::drop('galleries');
    }
}