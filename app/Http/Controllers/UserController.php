<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isManager']); 
    }
    public function index(){
        $users= User::all();
        return view('back.user.index', compact('users'));
    }
    public function edit($id){
        $user=User::find($id);
        $roles=Role::all();
        return view('back.user.edit', compact('user', 'roles'));
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $role_id = $request->role_id;

        $user->roles()->sync($role_id);
        
        return redirect('admin/users');
    }
}
