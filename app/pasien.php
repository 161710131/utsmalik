<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
     protected $table = 'pasiens';
    protected $fillable = ['nomorrm',
						 	'nama',
							'jk',
							'goldar',
							'tl'];
    public $timestamps = true;
}
