<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Skills;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function apply()
    {
        $data = [
            
            "job" => Jobs::all(),
            "skill" => Skills::all()
        ];
        return view('welcome', $data ,[
            'user' => auth()->user()
        ]);
    }

    public function authenticate(Request $request)
    {
        validator(request()->all(),[
            'email' => ['required', 'email'],
            'password' => ['required']
        ]) -> validate();
        if(auth()->attempt(request()->only(['email', 'password']))){
            return redirect('/apply');
        }

        return redirect()->back()->withErrors(['email'=>'Email/Password Salah']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
