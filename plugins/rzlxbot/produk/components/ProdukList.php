<?php namespace RzlXbot\Produk\Components;

use Cms\Classes\ComponentBase;
use Input;
use RzlXbot\Produk\Models\ProdukModel;

class ProdukList extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Product List',
            'description' => 'Display a product list'
        ];
    }

    public function defineProperties()
    {
        return [
            'rows' => [
                'title' => 'Number of row products',
                'description' => 'How many products do you want to display',
                'default' => 0,
                'validationPattern' => '^[0-9]*$',
                'validationMessage' => 'Only numbers allowed'
            ]
        ];
    }

    public function onRun()
    {
        $this->products = $this->loadProduct();
    }

    protected function loadProduct()
    {
        $row = $this->property('rows');
        return ProdukModel::all()->take($row);
    }

    public $products;
}
