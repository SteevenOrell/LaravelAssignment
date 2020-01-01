<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_data_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Geography');
            $table->double('record_2008');
            $table->double('record_2009');
            $table->double('record_2010');
            $table->double('record_2011');
            $table->double('record_2012');
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
        Schema::dropIfExists('_data_table');
    }
}
