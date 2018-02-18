<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemberianobat extends Model
{
    protected $table = 'pemberianobats';
    protected $fillable = ['nomorrawatjalan',
						 	'tgldiberiobat',
							'tglrawat',
							'jumlahobat',
							'dosis'];
    public $timestamps = true;
}
