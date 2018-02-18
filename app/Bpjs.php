<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    protected $table = 'bpjs';
    protected $fillable = ['nomorkartu',
						 	'nama',
							'alamat',
							'tl',
							'nik'];
    public $timestamps = true;
}
