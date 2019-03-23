<?php namespace RzlXbot\Produk\Models;

use Model;
use RzlXbot\KategoriProduk\Models\KategoriModel;

/**
 * Model
 */
class ProdukModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rzlxbot_produk_';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'nama_produk' => 'required|max:50',
        'deskripsi_produk' => 'required',
        'harga_produk' => 'required|numeric',
        'kategori_id' => 'required',
        'img_cover' => 'required'
    ];

    /* Relations */
    public $attachOne = [
        'img_cover' => 'System\Models\File'
    ];

    // public $attachMany = [
    //     'produk_galeri' => 'System\Models\File'
    // ];

    protected $jsonable = [
        'produk_galeri'
    ];

    public $belongsTo = [
        'kategori' => '\RzlXbot\KategoriProduk\Models\KategoriModel'
    ];

    public function getKategoriIdOptions()
    {
        $res = KategoriModel::get(['id', 'nama_kategori'])->toArray();
        $ret = [];

        foreach ($res as $val) {
            $ret[$val['id']] = $val['nama_kategori'];
        }
    
        return $ret;
    }

    public function scopeBySlug($query, $slug)
    {
        $id = KategoriModel::where('slug', $slug)->first();
        return $query->where('kategori_id', $id->id);
    }
}
