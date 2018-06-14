<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class HomeLayout extends Model
{


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
}
