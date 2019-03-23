<?php namespace RzlXbot\Produk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRzlxbotProduk extends Migration
{
    public function up()
    {
        Schema::create('rzlxbot_produk_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_produk', 50);
            $table->text('deskripsi_produk');
            $table->integer('kategori_id');
            $table->text('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('rzlxbot_produk_');
    }
}
