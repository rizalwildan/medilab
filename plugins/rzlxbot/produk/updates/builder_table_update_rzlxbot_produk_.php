<?php namespace RzlXbot\Produk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRzlxbotProduk extends Migration
{
    public function up()
    {
        Schema::table('rzlxbot_produk_', function($table)
        {
            $table->decimal('harga_produk', 10, 2);
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('rzlxbot_produk_', function($table)
        {
            $table->dropColumn('harga_produk');
            $table->increments('id')->unsigned()->change();
        });
    }
}
