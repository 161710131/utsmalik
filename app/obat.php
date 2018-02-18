<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table = 'obats';
    protected $fillable = ['kode_barang',
						 	'namaobat',
							'kategori',
							'jumlah',
							'harga'];
    public $timestamps = true;
}
