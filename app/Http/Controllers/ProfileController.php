<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::find(1);
        return inertia('Profile.Index', compact('data'));
    }

    public function edit()
    {
        $data = User::findorFail(auth()->id());
        return inertia('Profile.Edit', compact('data'));
    }

    public function update(Request $request)
    {
        $validate = $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required'
        ]);

        $user = User::findorFail($request->user()->id);
        $user->update($validate);

        return back()->with('success', 'Profile updated successfully');
    }
}
