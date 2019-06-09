<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('facebook2')->nullable();
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('from')->nullable();
            $table->string('information')->nullable();
            $table->string('set_id')->nullable();
            $table->tinyInteger('danger')->deafualt(0)->nullable();
            $table->integer('user_id')->unsigned()->nullable();

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
        Schema::dropIfExists('contacts');
    }
}
