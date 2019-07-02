<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id');
            $table->string('title');
            $table->string('slug');
            $table->string('thumbnail');
            $table->text('description');
            $table->integer('position');
            $table->tinyInteger('status');
            $table->string('link');
            $table->string('create_user');
            $table->string('update_user');
            $table->timestamps();
            //$table->timestamps('deleted_at');
            $table->string('delete_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
