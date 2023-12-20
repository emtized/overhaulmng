<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
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
            return redirect()->back();
        }
        return redirect()->route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            DB::beginTransaction();

            $role->update([
                'name' => $request->name,
            ]);

            $permissions = $request->except('_token', 'name','_method');
            $role->syncPermissions($permissions);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back();
        }
        return redirect()->route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        $result = $role->delete();
        return back()->with('swal-success','نقش شما با موفقیت حذف شد');
    }
}
