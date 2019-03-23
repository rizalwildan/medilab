<?php namespace RzlXbot\KategoriProduk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRzlxbotKategoriproduk extends Migration
{
    public function up()
    {
        Schema::create('rzlxbot_kategoriproduk_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_kategori', 50);
            $table->text('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rzlxbot_kategoriproduk_');
    }
}
