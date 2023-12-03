<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __invoke(User $user)
    {
        $user = Auth::user();
        $balance = $user->balance;

        return view('profile', compact('balance'));

    }
}
