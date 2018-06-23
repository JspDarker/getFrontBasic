<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use Illuminate\Support\Facades\DB;
use App\HomeLayout;


class GirdProductController extends Controller
{

    public function showItems($alias)
    {

        $items = (new HomeLayout)->girdProduct($alias);

        #dd($items);
        return view('shops.grid-product.grid-index',compact('items'));
    }

    public function singleProduct($id_url)
    {

        $items = (new HomeLayout)->singleProduct($id_url);
        #dd($items);
        return view('shops.details.detail', compact('items'));
    }

}
