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

        Schema::create('ministrys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('campamentis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->integer('phone')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['pending','active','process','closed'])->nullable()->default('pending')->nullable();
            $table->integer('ministry_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('capacity')->default(0);
            $table->timestamps();
        });

        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campamenti_id')->nullable();
            $table->integer('vote')->default(1);
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
        Schema::dropIfExists('groups');

        Schema::dropIfExists('ministrys');
        Schema::dropIfExists('campamentis');
        Schema::dropIfExists('votes');
    }
}
