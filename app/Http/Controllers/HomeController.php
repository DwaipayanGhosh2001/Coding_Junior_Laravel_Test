<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('themes.home');
    }
    public function getUsers(Request $request) {
     
        $singleUser = Auth::user();
        $users['allDetails'] = User::where('id', '!=', $singleUser->id)->get();
        $users['singleDetails']= User::find($singleUser->id);
        return view('themes.dashboard', $users);
    }
    
    
}
