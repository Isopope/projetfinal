<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\User;
use App\Models\foodchef;

class HomeController extends Controller
{
    
    public function redirects(){
        $donnee=food::all();
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view("admin.adminhome");
        }else{
            return view("home",compact("donnee"));
        }
    }

    public function index(){
        $donnee=food::all();
        $data=foodchef::all();
        return view("home",compact("donnee","data"));
    }

}
