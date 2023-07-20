<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class General extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('image');
            $table->integer('group_id')->nullable();
            $table->enum('status',['read','pending']);
            $table->timestamps();
        });

        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->boolean('see')->default(false);
            $table->integer('incorrect')->default(0);
            $table->integer('points')->default(0);
            $table->timestamps();
        });

        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pts');
            $table->timestamps();
        });

        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(0);
            $table->integer('coin_id')->nullable();
            $table->integer('group_id')->nullable();
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
        //
        Schema::dropIfExists('groups');
        Schema::dropIfExists('products');
        Schema::dropIfExists('views');
        Schema::dropIfExists('coins');
        Schema::dropIfExists('points');

    }
}
