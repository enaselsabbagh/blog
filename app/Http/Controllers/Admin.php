<?php
namespace App\Http\Controllers;
class Admin extends Controller{
    public function count(){
        $a = 1;
        $b = 2;
        $c = $a + $b;
        return view('index2')->with('c' , $c);
    }
}
