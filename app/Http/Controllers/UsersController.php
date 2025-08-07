<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view("users", [
            'users' => $users
        ]);
    }

    public function store()
    {
        // dd(request('username'));
        DB::table('users')->insert([
            'name' => request('username')
        ]);


        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('/');
    }

    public function edit($id)
    {
        $user =  DB::table('users')->where('id', $id)->first();
        return view('edit', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $user =  DB::table('users')->where('id', $id)->update([
            'name' => request('username')
        ]);
        return redirect('/');
    }
}
