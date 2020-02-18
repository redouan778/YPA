<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rules\Lowercase;


class UserController extends Controller
{

    public function __construct(){
//        $this->middleware('user.db');
    }

    public function getUsers()
    {
        return User::all();
    }

    public function create()
    {
        return view('addUser');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=> ['required', new Lowercase],
            'password'=>'required',
        ]);

        $user = new User([
            'name' => $request->get('name'),
            'first_name'=> $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        $user->save();

        return redirect('/')->with('message', 'User  ' . ' ' . $request->name . ' ' . 'is succesfully created.');
    }
}
