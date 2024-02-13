<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        // dammi i dati dell'user loggato
        // dd(Auth::user());

        // dammi solo un dato specifico dell'user loggato 
        // dd(Auth::user()->email);
        // dd(Auth::user()->name);
        // dd(Auth::user()->password, Hash::make('12345678'));


        return view('admin.dashboard');
    }
}
