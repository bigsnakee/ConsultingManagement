<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $roles = Role::with('permissions')->get();
        return view('roles.index', compact('roles'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);

        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index');
    }

    public function show(Role $role)
    {
        $role->load('permissions');
        return view('roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $role->load('permissions');
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        if ($role->name === 'Admin') {
            return redirect()->route('roles.index')->with('error', 'Không thể xóa vai trò admin.');
        }

        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Vai trò đã được xóa thành công.');
    }
}
