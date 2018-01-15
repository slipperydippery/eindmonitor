<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    	'title', 'description', 'body', 'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo('/App/Category');
    }
}
