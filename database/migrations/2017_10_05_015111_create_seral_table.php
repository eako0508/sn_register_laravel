<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sn_tables', function (Blueprint $table) {
            $table->increments('id');
			$table->string('company');
			$table->integer('invoice');
			$table->string('product')->nullable();
			$table->string('product_sn')->nullable();
			$table->string('hdd')->nullable();
			$table->string('hdd_sn')->nullable();
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
        Schema::dropIfExists('sn_tables');
    }
}
