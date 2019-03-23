<?php namespace RzlXbot\Produk\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRzlxbotProduk2 extends Migration
{
    public function up()
    {
        Schema::table('rzlxbot_produk_', function($table)
        {
            $table->text('produk_galeri');
        });
    }
    
    public function down()
    {
        Schema::table('rzlxbot_produk_', function($table)
        {
            $table->dropColumn('produk_galeri');
        });
    }
}
