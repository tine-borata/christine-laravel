<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InsertRecord extends Controller
{
     public static function insert(Request $request) {

        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];

       $inserted = DB::table("users")->insert([
            "fname" => $fname,
            "lname" => $lname,
            "email" => $email
        ]);

        if($inserted) {
            return [
                "success" => true,
                "massage" => "successfully registerd"
            ];
            
        }   
        else {
            return[
                "success" => false,
                "massage" => "fail to register user"
            ];
        } 

     }
}
