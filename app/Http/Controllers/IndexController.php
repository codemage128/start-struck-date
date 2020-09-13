<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        return view('index');
    }
    public function users(Request $request){
        return view('users');
    }
    public function addUser(Request $request){
        return view('user-add');
    }
    public function editUser(Request $request){
        return view('user-edit');
    }
    public function membership(Request $request){
        return view('membership');
    }
}
