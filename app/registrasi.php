<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrasi extends Model
{
      protected $table = 'registrasis';
    protected $fillable = ['nomorrm',
						 	'tanggalregis',
							'jamregis',
							'kodedok',
							'nomorindukpetugas'];
    public $timestamps = true;
}
