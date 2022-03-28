<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hello;

class HelloWorld extends Controller
{
    public function sayHello()
{   
    $message = "Hello world!!";
    //return view("hello",compact("message"));
    return view ('hello', ["message" => Hello::helloWorldMessage()]);

}
}
