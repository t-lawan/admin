<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('technologies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', 20)->unique();
          $table->timestamps();
      });

      Schema::create('project_technology', function (Blueprint $table) {
          $table->integer('project_id');
          $table->integer('technology_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technologies');
        Schema::dropIfExists('project_technology');
    }
}
