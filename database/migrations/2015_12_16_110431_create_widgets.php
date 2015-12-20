<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('widgets_collection_id')->unsigned();
            $table->integer('sequence')->default(0);
            $table->timestamps();
            $table->foreign('widgets_collection_id')->references('id')
                ->on('widget_collections')
                ->onDelete('cascade');
            $table->integer('imageable_id');
            $table->string('imageable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('widgets');
    }
}
