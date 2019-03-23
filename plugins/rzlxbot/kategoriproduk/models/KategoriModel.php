<?php namespace RzlXbot\KategoriProduk\Models;

use Model;

/**
 * Model
 */
class KategoriModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rzlxbot_kategoriproduk_';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'nama_kategori' => 'required',
        'slug' => 'required'
    ];

    /* Relationship */
    public $hasMany = [
        'produk' => ['\RzlXbot\Produk\Models\ProdukModel', 'key' => 'kategori_id', 'otherKey' => 'id']
    ];
}
