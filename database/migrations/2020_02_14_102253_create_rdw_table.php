<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdw', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merk');
            $table->string('kenteken');
            $table->string('handelsbenaming')->nullable();
            $table->string('vervaldatum_apk')->nullable();
            $table->string('voertuigsoort')->nullable();
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
        Schema::dropIfExists('rdw');
    }
}
