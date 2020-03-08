<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:administrator']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'member']);
        // $role = Role::create(['name' => 'moderator']);
        // $role = Role::create(['name' => 'administrator']);
        // $permission = Permission::create(['name' => 'edit articles']);
        // Auth()->user()->assignRole('administrator');
        // $user_id  = Auth()->user()->id;
        // $user = User::find($user_id);
        // var_dump($user);
        // var_dump($user);
        // Permission::create(['name' => 'update mission and vision']);
        // $role = Role::findByName('administrator');
        // return Auth::User()->roles[0]->name;
        return view('home');
    }
}
