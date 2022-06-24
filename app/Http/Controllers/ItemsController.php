<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemsController extends Controller
{
    public function getItems($s) {
        $items = DB::table('itemdetection')->select('station')->where('s','=',$s)->get();
        return $items;
    }

    public function getTableLength() {
        $tablelength = DB::table('itemdetection')->max('s');
        return $tablelength;
    }
}
