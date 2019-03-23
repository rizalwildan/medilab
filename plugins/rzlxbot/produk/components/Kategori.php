<?php namespace RzlXbot\Produk\Components;

use Cms\Classes\ComponentBase;
use RzlXbot\KategoriProduk\Models\KategoriModel;

class Kategori extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Kategori List',
            'description' => 'List of Kategori'
        ];
    }

    public function defineProperties()
    {
        return [
            'results' => [
                'title' => 'Number of Kategori',
                'description' => 'How Many bla'
            ]
        ];
    }
}
