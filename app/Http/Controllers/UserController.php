<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('managers.index', ['managers'=>User::role('manager')->get()]);
    }

    public function show(User $user)
    {

    }

    public function edit(User $user)
    {

        return view('managers.edit', ['manager' => $user]);

    }

    public function update(Request $request, User $user)
    {
        $request->validate([]);
        $user->update($request->all());
        return redirect()->route('manager.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('managers.index');
    }

    public function create()
    {
        return view('managers.create');
    }

    public function store(Request $request)
    {
        User::create($request->all())->assignRole('manager');

        return redirect()->route('manager.index');
    }


}
