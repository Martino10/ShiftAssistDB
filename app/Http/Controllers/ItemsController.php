<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemsController extends Controller
{
    public function load() {
        $itemtable = DB::table('itemdetection')->get();
        return $itemtable;
    }
}
