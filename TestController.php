<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('blogk20');
     }
     public function name()
     {
        return view('blogk20name');
     }
     public function gioithieu()
     {
        return view('blogk20gioithieu');
     }
     public function dangnhap()
     {
        return view('blogk20dangnhap');
     }
     public function dangki()
     {
        return view('blogk20dangki');
     }
     public function index2()
     {
        return view('adminindex');
     }
     public function logout()
     {
        return view('adminlogout');
     }
     public function insert(Request $request)
     {
        return view('admintable');
     }
     public function delete(Request $request)
     {
        return view('admintable');
     }
     
}
