<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $fillable = [
		'company',
		'invoice',
		'product',
		'product_sn',
		'hdd',
		'hdd_sn',
		'created_at',
		'updated_at'
	];
}
