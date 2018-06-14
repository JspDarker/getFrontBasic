<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\HomeLayout;

class PageIndexController extends Controller
{


    /*public function navBar()
    {
        $tired = (new HomeLayout)->navBar();
        return view('shops.layouts.master', compact('tired'));
    }*/
    public function index()
    {
        //TODO: completed menu
        /*$tired1 = DB::table('categories')->
        leftJoin('meuls','categories.id','=','meuls.level_2')->
        where('categories.id','<',7)->
        groupBy('categories.id')->
        select('categories.*',
            DB::raw('GROUP_CONCAT(meuls.name,11,meuls.id_url) AS Level2')
        )->
        get();*/

        #$tired = (new HomeLayout)->navBar();

        return view('shop');
    }


    public function bugQuery()
    {
        /*
            select ca.`name`, pu.url, c2.level_2
            from categories ca
            inner join page_url pu
            on ca.`id_url` = pu.id
            left join (
                select c2.id_parent, group_concat(c2.name,'::',p.url) as level_2
                from categories c2
                inner join page_url p
                on c2.id_url = p.id
                where c2.id_parent is not null
                group by c2.id_parent
            )c2
            on ca.id = c2.id_parent

            where ca.id_parent is null
         * */

        #$queries = DB::getQueryLog();

//        echo "<pre>";
//        print_r($queries);
//        echo "</pre>";
//        echo "<pre>";
//        print_r($tired);
//        echo "</pre>";
//        dd();

        /*DB::enableQueryLog();

        $sql = DB::table('customers')->select('email')->get();
        $sql1 = DB::table('page_url')->where('url','like','apple-cap%')
            ->orWhere('url','like','apple-watch%')
            ->orderBy('id')
            ->take(5)
            ->get();
        $queries = DB::getQueryLog();

        echo "<pre>";
        print_r($queries);
        echo "</pre>";
        foreach ($sql1 as $value) {
            echo "<p>ID: $value->id || URL: $value->url</p>";
        }
        dd($sql1);*/

        /*DB::enableQueryLog();*/
//        $menu_level_1 = DB::table('categories')
//            ->join('page_url','categories.id_url','=','page_url.id')
//            ->select('name', 'icon','page_url.url')
//            ->where('id_parent','=',null)->get();
        /* echo "<pre>";
         print_r($menu_level_1);
         echo "</pre>";*/
        /*$queries = DB::getQueryLog();

        echo "<pre>";
        print_r($queries);
        echo "</pre>";
        echo "<pre>";
        print_r($menu_level_1);
        echo "</pre>";*/
        #DB::enableQueryLog();

        /*$sa = DB::table('categories')
            ->join('page_url', function ($join){
                $join->on('categories.id_url','=', 'page_url.id')
                    ->where('categories.id_parent','<>',null);
            })
            ->get();*/




        /*$menu_level_2 = DB::table('categories')
            ->leftJoin('page_url','categories.id_url','=','page_url.id')
            ->selectRaw('name, page_url.url')
            ->whereRaw('id_parent is not null')
            ->get();*/

        #$queries = DB::getQueryLog();


        /*echo "<pre>";
        print_r($queries);
        echo "</pre>";
        echo "<pre>";
        print_r($menu_level_2);
        echo "</pre>";*/

        /*$test = DB::table('meuls')
            ->selectRaw(DB::raw('GROUP_CONCAT(name,1,id_url) AS level2'))
            ->groupBy('level_2')
            ->get();
        echo "<pre>";
        print_r($test);
        echo "</pre>";*/
        #DB::enableQueryLog();

        /*$complete = DB::table('categories')
            ->join('page_url', function($a) {
                $a->on('categories.id_url','=','page_url.id')
                    ->where('categories.id_parent','=','IS NOT NULL');
            })
            ->leftJoin('meuls','categories.id','=','meuls.id')
            ->select(
                DB::raw('GROUP_CONCAT(meuls.name,11,meuls.id_url) AS level2'),
                'categories.name AS LEVEL1',
                'page_url.url AS url1'
            )
            ->where('categories.id_parent','=','IS NULL')
            ->groupBy('categories.id')
            ->get();*/

    }







    public function scopeCompanies($query) {
        return $query->
        leftJoin('users', 'company_id', '=', 'companies.id')->
        select(
            DB::raw('GROUP_CONCAT(username) AS Users'),
            'companies.index AS Index',
            'companies.name AS Company Name',
            'companies.address AS Address')
            ->groupBy('companies.index')
            ->orderBy('Users','DESC')
            ->get();
    }

    public function tired()
    {
        DB::table('categories')->
            leftJoin('meuls','categories.id','=','meuls.level_2')->
            where('categories.id','<',7)->
            groupBy('categories.id')->
            select('categories.*',
            DB::raw('GROUP_CONCAT(meuls.name,11,meuls.id_url) AS Level2')
            )->
            get();
    }

}




/* DB::enableQueryLog();
      $users = DB::table('users')
            ->whereIn('id', [1, 2, 3])
            ->get();

    DB::table('users')            -
    >where('name', 'like', 'd%')
    ->get();

$queries = DB::getQueryLog();
echo '';print_r($queries);
 *
 *
 * */
