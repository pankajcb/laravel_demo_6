<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class AdminController extends Controller
{
    public function dashboard(Request $request){
         
    }

    public function admin_list(){
        return ['admin'=>20]; 
    }
    public function user_list(){
        return ['a','b','c'];
    }
}
