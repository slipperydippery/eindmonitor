<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $filable = [
    	'title', 'description'
    ];

    public function pages()
    {
    	return $this->hasMany('App\Page');
    }
}
