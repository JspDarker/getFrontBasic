<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    public function pageUrl()
    {
        return $this->belongsTo(PageUrl::class);
    }

    public function level_2()
    {
        return $this->hasMany(Meul::class,'id','level_2');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
