<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function signup()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            "name" => 'required',
            "email" => ["required", 'email', Rule::unique('users', 'email')],
            //"confirmed" automatically checks for _confirmation tag with taht name
            "password" => ['required', 'confirmed', 'min:6'],
        ]);

        //hashing password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);
        return redirect("/");
    }

    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }

    public function login()
    {
        return view("users.login");
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "email" => 'required',
            "password" => 'required',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect("/");
        } else {
            return back()->withErrors(["email" => "invalid email/password"])->onlyInput('email');
        }
    }
}
