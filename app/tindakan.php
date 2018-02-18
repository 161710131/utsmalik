<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
     protected $table = 'tindakans';
    protected $fillable = ['kode_Tindakan',
						 	'nama',
							'jenistindakan',
							'waktutindakan',
							'tariftindakan'];
    public $timestamps = true;
}
