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
            $table->string('title')->nullable();
            $table->boolean('status')->nullable();
            $table->string('content')->nullable();
            $table->string('image')->nullable();
            $table->integer('loaitin_id')->unsigned()->nullable();
            //Mối liên hệ khóa
            $table->foreign('loaitin_id')->references('id')->on('loaitin')
                  ->onDelete('cascade'); 
           $table->integer('idUser')->unsigned()->nullable();
            $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('post');
    }
}
