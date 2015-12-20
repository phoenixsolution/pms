<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('banner_collection_id')->unsigned();
            $table->integer('sequence')->default(0);
            $table->timestamps();
            $table->foreign('banner_collection_id')
                    ->references('id')
                    ->on('banner_collections')
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
        Schema::drop('banners');
    }
}
