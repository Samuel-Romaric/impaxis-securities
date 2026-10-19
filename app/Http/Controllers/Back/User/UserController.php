<?php

namespace App\Http\Controllers\Back\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function userCreate() : View 
    {
        return view('back.users.create');
    }

    public function userEdit(int $user_id) 
    {
        $user = User::where('id', $user_id)->first();

        return view('back.users.edit', compact('user'));
    }
}