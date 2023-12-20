<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.admin-user.index',compact('users','roles'));
    }

    public function store(UserRequest $request)
    {
        $inputs = $request->all();

        $user = User::create($inputs);
        $user->assignRole($request->role);

        return back()->with('swal-success','کاربرادمین شما با موفقیت ثبت شد');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.admin-user.edit', compact('user', 'roles'));
    }

    public function update(UserRequest $request,User $user)
    {
        $inputs = $request->all();

        $user->update($inputs);
        $user->syncRoles($request->role);

        return redirect()->route('admin.user.index')->with('swal-success','کاربرادمین شما با موفقیت ویرایش شد');
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        $result = $user->delete();
        
        return back()->with('swal-success','کاربر با موفقیت حذف شد');
    }
}
