<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    public function userLayout(){

        return Inertia('layout/user/UserLayout',[
            'user' => Auth::user(),
        ]);
    }
}
