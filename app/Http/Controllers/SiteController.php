<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index(Request $request, $email){
      
        $email= "john@test.com"; 

        $data1= [
            "status" => "success",
            "message" => "Form submitted successfully.",
            "email" => "john@test.com"
        ];

        $date2=[
            "status" => "failed",
            "message"=> "Form submission failed."
        ];

        if($request->email == $email) {
            return response()->json($data1);
        }else{
            return response()->json($date2);
        }

    }


    function userAgent(Request $request){
        return $request->header('User-Agent');
    }
}
