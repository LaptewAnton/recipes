<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTagsTable extends Migration
{
    public function up()
    {
        Schema::create('recipes_tags', function (Blueprint $table) {
            $table->integer('id_tag');
            $table->integer('id_recipe');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recipes_tags');
    }
}
