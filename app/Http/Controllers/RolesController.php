<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Resources\RoleResource;

class RolesController extends Controller
{
    public function index(){

        $roles = Role::latest('id')->paginate(10);

        return Inertia::render('Roles/index',[
            'roles'=> RoleResource::collection($roles),
        ]);
    }
}
