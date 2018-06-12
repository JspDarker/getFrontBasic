<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageIndexController extends Controller
{

    public function index()
    {
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
        $menu_level_1 = DB::table('categories')
            ->select('name', 'icon')
            ->where('id_parent','=',null)->get();
        /*$queries = DB::getQueryLog();

        echo "<pre>";
        print_r($queries);
        echo "</pre>";
        echo "<pre>";
        print_r($menu_level_1);
        echo "</pre>";*/
        DB::enableQueryLog();

        $sa = DB::table('categories')
            ->join('page_url', function ($join){
                $join->on('categories.id_url','=', 'page_url.id')
                    ->where('categories.id_parent','<>',null);
            })
            ->get();
        $queries = DB::getQueryLog();


        echo "<pre>";
        print_r($queries);
        echo "</pre>";
        echo "<pre>";
        print_r($sa);
        echo "</pre>";

        return view('shop',compact('menu_level_1'));
    }


    public function accessMenu()
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
