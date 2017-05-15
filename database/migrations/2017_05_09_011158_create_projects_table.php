<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('projects', function (Blueprint $table)
      {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->string('name', 20);
          $table->text('description');
          $table->string('user_email', 30);
          $table->string('user_password');
          $table->text('github_link');
          $table->text('site_link');
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
        Schema::dropIfExists('projects');
    }
}
