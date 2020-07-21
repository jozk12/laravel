<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function Hello(){
        echo "Hello, Duc Dinh";
    }
    function Test($demo){
        echo $demo;
        return redirect()->route('ducdinhRoute');
    }
    function Req(Request $request){
        return $request->path();
    }
    function postForm(Request $request){
        dd($request->NameForm);
    }
}
