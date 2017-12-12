<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddidentifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addidentifies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('sec_id');
            $table->string('title_identify');
            $table->integer('items_identify');
           
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
        Schema::dropIfExists('addidentifies');
    }
}
