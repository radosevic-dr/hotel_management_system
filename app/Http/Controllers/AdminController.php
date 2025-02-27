<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    //
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->role;
            
            if ($role == 'user') return view('dashboard');
            if ($role == 'admin') return view('admin.dashboard');
            return redirect()->back();
        }
    }
}
