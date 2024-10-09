<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Updaterecord extends Controller
{
    public static function update(Request $request) {
        return DB::table("users")
        ->where("id", $request['id'])
        ->update([
            "fname" => $request['fname'],
            "lname" => $request['lname'],
            "email" => $request['email'],


        ]);

        if($update) {
            return [
                "success" => true,
                "massage" => "successfully updated"
            ];
            
        }   
        else {
            return[
                "success" => false,
                "massage" => "fail to update"

            ];
        }    
    }

}
