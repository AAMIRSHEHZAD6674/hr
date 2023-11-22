<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function create(Request $request)
    {

//        $roles = Cache::rememberForever('roles?page=' . $request->get('page', 1),function (){
//            return  Role::paginate(10);
//        });

        return view('roles',['roles'=>Role::paginate(10)]);
    }

    public function add_roles()
    {

        return view('roles_add', ['data' => Permission::all()]);
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'role' => ['required', 'min:2'],
            'permissions' => ['required'],
            'permissions.*' => ['integer', 'exists:permissions,id'],
        ]);

        $roles = Role::create([
            'name' => $request->role,
            'slug' => Str::slug($request->role),
        ]);

        $roles->permissions()->attach($request->permissions);
        return redirect('/roles');
    }


    public function edit($id)
    {

        return view('roles-edit', ['data' => Role::with('permissions')->find($id), 'permissionArray' => Permission::all()]);
    }

    public function update(Request $request, $id)
    {

        $role = Role::find($id);
        $role->update([
            'name' => $request->role,
            'slug' => Str::slug($request->role),
        ]);

        $role->permissions()->sync($request->permissions);
        return redirect('/roles');

    }

    public function delete($id)
    {

        $roles = Role::find($id);
        $permissions=$roles->permissions()->get();
        return view('roles-delete', ['roles' =>$roles,'permissions'=>$permissions]);

    }
}
