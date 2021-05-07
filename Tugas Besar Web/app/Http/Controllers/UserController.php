<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('pages.user.home',compact('user'));
    }
    public function create(){
        return view('pages.user.create');
    }
    public function store(){
        return redirect('/');
    }
}
