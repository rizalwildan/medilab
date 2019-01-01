<?php namespace RzlXbot\Produk;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Rzlxbot\Produk\Components\ProdukList' => 'produklist',
            'Rzlxbot\Produk\Components\FilterProduk' => 'filterproduk'
        ];
    }

    public function registerSettings()
    {
    }
}
