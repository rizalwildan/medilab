<?php namespace RzlXbot\Produk\Components;

use Cms\Classes\ComponentBase;
use Input;
use RzlXbot\KategoriProduk\Models\KategoriModel;
use RzlXbot\Produk\Models\ProdukModel;

class FilterProduk extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Filter Kategori',
            'description' => 'Display a kategori'
        ];
    }

    public function onRun()
    {
        $this->category = $this->filterCategory();
    }

    protected function filterCategory()
    {
        $query = KategoriModel::all();
        return $query;
    }

    public $category;
}
