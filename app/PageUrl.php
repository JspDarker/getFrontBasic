<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageUrl extends Model
{
    protected $table = 'page_url';

    public function categories()
    {
        return $this->hasMany(Categorie::class,'id_url','id');
    }

    public function level_2()
    {
        return $this->hasMany(Meul::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
