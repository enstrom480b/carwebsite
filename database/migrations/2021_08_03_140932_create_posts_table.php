<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('carmake');
            $table->string('carmodel');
            $table->string('yearofmanufacture');
            $table->string('engine');
            $table->string('mileage');
            $table->string('transmission');
            $table->string('color');
            $table->string('price');
            $table->string('location');
            $table->string('description');
            $table->string('condition');
            $table->string('bodytype');
            $table->string('duty');
            $table->string('interior');
            $table->string('airbag')->nullable();
            $table->string('electricmirrors')->nullable();
            $table->string('alloywheels')->nullable();
            $table->string('tractioncontrol')->nullable();
            $table->string('airconditioning')->nullable();
            $table->string('powersteering')->nullable();
            $table->string('amfmradio')->nullable();
            $table->string('frontfoglamps')->nullable();
            $table->string('electricwindows')->nullable();
            $table->string('FogLights')->nullable();
            $table->string('thumbstart')->nullable();
            $table->string('cover');
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
        Schema::dropIfExists('posts');
    }
}
