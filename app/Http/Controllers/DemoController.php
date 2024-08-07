<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
            $array =[ 
            [
                'name' => 'Abid Hussain',
                'email' => 'abid@gmail.com'
            ],

            [
                'name' => 'Ali Hussain',
                'email' => 'ali@gmail.com'
            ]
        ];

        return response()->json([
            
            'status' => true,
            'message' => '2 User Found',
            'data' => $array

        ] , 200);
    }
}
