<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetRecord extends Controller
{
    public static function get($id) {
        return DB::table("users")->where("id", $id)->get()[0];
    }
    public static function all() {
        return DB::table("users")->get();
    }
}
