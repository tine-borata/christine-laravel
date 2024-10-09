<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Deleterecord extends Controller
{

    public static function delete($id) {
      $deleted = DB::table("users")->where("id", $id)->delete();
      if($deleted) {
        return [
            "success" => true,
            "massage" => "successfully deleted"
        ];
        }   
         else {
           return[
            "success" => false,
            "massage" => "fail to delete user"
        ];
        }

    }
}
