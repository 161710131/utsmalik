<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = 'dokters';
    protected $fillable = ['kodedok',
						 	'nama',
							'jk',
							'spesialis',
							'nomorijinpraktek'];
    public $timestamps = true;
}
