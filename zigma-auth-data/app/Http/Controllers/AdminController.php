<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showAllAdmin(){

        $admins = DB::table('users')
        ->where('admin', '=', '1')
        ->join('roles', 'roles.id', '=', 'users.role')
        ->select('users.id','users.name','users.email', 'roles.name as role', 'users.block')
        ->get();

         return view('administrators', compact('admins'));

    }

  

    public function editAdmin(Request $request){

        $user_id = $request->input('user_id');

        $user = DB::table('users')
        ->where('users.id', '=', $user_id )
        ->join('roles', 'roles.id', '=', 'users.role')
        ->select('users.id','roles.name as role_name', 'roles.id as role_id', 'users.block', 'users.admin')
        ->first();

       // dd($user);

         return view('edit_administrator', compact('user'));

    }

    public function updateAdmin(Request $request){

        $user_id = $request->input('user_id');
        $role = $request->input('role');
        $block = $request->input('block');

        $update =  DB::table('users')
        ->where('id', '=', $user_id)
        ->update(['role' => $role, 'block' => $block]);

        return view('dashboard');

    }
}
