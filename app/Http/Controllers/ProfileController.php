<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('profile.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(User $user){
        $data = request() -> validate([
            'title' => '',
            'des'   => '',
            'url'   => '',
        ]);

        $user->profile()->update($data);

        return redirect('/profile/' . auth()->user()->id);
    }
}
