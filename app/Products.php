<?php

namespace DLG;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = array(
    	'name',
    	'wholesale_price',
		'retail_price',
    	'stocks',
    	'added_by'
    );
}