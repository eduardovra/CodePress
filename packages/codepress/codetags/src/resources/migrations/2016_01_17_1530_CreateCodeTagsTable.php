<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTagsTable
{
    public function up()
    {
        Schema::create('codepress_tags', function(Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->integer('taggable_id')->nullable(true);
           $table->string('taggable_type')->nullable(true);
           $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('codepress_tags');
    }
}