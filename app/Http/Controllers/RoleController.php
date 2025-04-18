<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role(Request $request)
    {
        $id = $request->id;

        $role = Role::find($id);
        $data = [
            'role' => $role,
            'users' => $role->users
        ];

        return view('role.view', $data);
    }
}
