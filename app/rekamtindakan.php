<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekamtindakan extends Model
{
     protected $table = 'rekamtindakans';
    protected $fillable = ['diagnosasakit',
						 	'tanggalrawat',
							'suhutubuh',
							'tensidarah',
							'ketgejala'
							];
    public $timestamps = true;
}



