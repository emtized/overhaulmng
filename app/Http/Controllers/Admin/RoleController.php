<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index',compact('roles'));
    }

    public function create()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $users = User::all();

        $usersCountPerRole = [];
        foreach ($roles as $role) {
            $userCount = User::role($role->name)->count();
            $usersCountPerRole[$role->name] = $userCount;
        }

        return view('admin.roles.create',compact('roles','permissions','users','usersCountPerRole'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $role = Role::create([
                'name' => $request->name,
                'title' => $request->title,
                'guard_name' => 'web'
            ]);

            $permissions = $request->except('_token', 'name','title');
            $role->givePermissionTo($permissions);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('swal-error',$ex->getMessage());
        }
        return redirect()->route('admin.role.index');
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $role->update([
                'name' => $request->name,
                'title' => $request->title
            ]);

            $permissions = $request->except('_token', 'name','title','_method');
            $role->syncPermissions($permissions);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('swal-error',$ex->getMessage());;
        }
        return redirect()->route('admin.role.index');
    }

    public function destroy(Role $role)
    {
        $result = $role->delete();
        return back()->with('swal-success','نقش شما با موفقیت حذف شد');
    }
}
