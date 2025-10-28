<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('client.auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string', "min:3"],
            'password' => ['required'],
            'role' => [
                'required',
                Rule::in(['Teacher', 'Admin']),
            ],
        ]);

        $role = $request->role;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($role == 'Teacher') {
                return redirect()->route('home')->with([
                    'success' => "Ustunlikli giris edildi"
                ]);
            } else if ($role == 'Admin') {
                return redirect()->route('admin')->with([
                    'success' => "Ustunlikli giris edildi"
                ]);
            }
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('/')
            ->with([
                'success' => 'Ustunlikli cykys edildi',
            ]);
    }
}
