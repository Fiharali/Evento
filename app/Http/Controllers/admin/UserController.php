<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::paginate(3);
        $roles=Role::all();
        return view('Admin.users.index',compact('users','roles'));
    }


    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::make($request->password),
        ]);
        $user->roles()->attach($request->role);
        return redirect()->back()->with(['success' =>' User add successful']);
    }

    /**
     * Display the specified resource.
     */




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->attach($request->role);
        return redirect()->back()->with(['success' =>' User updated successful']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with(['success' =>' User deleted successful']);
    }
}
