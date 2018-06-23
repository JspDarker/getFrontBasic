<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Product;

class HomeLayout extends Model
{

    protected $primaryKey = '';

    public function navBar()
    {

        //TODO: completed menu
        return DB::table('categories')->
        leftJoin('meuls','categories.id','=','meuls.level_2')->
        where('categories.id','<',7)->
        groupBy('categories.id')->
        select('categories.*',
            DB::raw('GROUP_CONCAT(meuls.name,11,meuls.id_url) AS Level2')
        )->
        get();

    }

    public function girdProduct($alias)
    {
        return DB::table('products')
            ->join('page_url','products.id_url','=','page_url.id')
            ->where('products.name','like',"$alias%")
            //->limit(9)
            ->orderBy('price','asc')
            ->select(
                'products.id_url',
                'page_url.url',
                'products.name',
                'products.price',
                'products.promotion_price',
                'products.image',
                'products.status',
                'products.new'
            )->get();
    }

    public function singleProduct($id_url)
    {
        return DB::table('products')
                ->join('page_url','products.id_url','=','page_url.id')
                ->where('products.id_url','=',$id_url)
                ->select(
                    'products.id_url',
                    'page_url.url',
                    'products.name',
                    'products.price',
                    'products.detail',
                    'products.promotion_price',
                    'products.image',
                    'products.status',
                    'products.new'
                )
                ->get();

    }

    public function test($id)
    {
        Product::where('id_url','=',$id);
    }
}
