<?php

namespace App\Http\Controllers\Adminauth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'adresse' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'fontion' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'date_de_naissance' => ['required', 'string', 'date'],
            'genre' => ['required', 'string'],
            'Téléphone' => ['required', 'string'],
            'ville' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Admin::create([
            'adresse' => $request->adresse,
            'logo' => $request->logo,
            'name' => $request->name,
            'fontion' => $request->fontion,
            'email' => $request->email,
            'date_de_naissance' => $request->date_de_naissance,
            'genre' => $request->genre,
            'Téléphone' => $request->Téléphone,
            'ville' => $request->ville,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::guard('admin')->login($user);

        return redirect(RouteServiceProvider::ADMIN_HOME);
    }
}
