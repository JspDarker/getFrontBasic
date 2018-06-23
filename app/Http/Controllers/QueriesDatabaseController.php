<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\PageUrl;
use Illuminate\Http\Request;

class QueriesDatabaseController extends Controller
{

    public function basic()
    {


        $data = PageUrl::select('url')
            ->with('products')
            ->limit(10)
            ->get();
        $data = Categorie::
            dd($data);
    }
}
