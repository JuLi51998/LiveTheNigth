<?php

namespace App\Http\Controllers;
use Auth;



use App;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function signin()
    {
        return view('web.signin');
    }

    public function signup()
    {
        return view('web.signup');
    }

    public function register(Request $request) {
        /*$credentials = $this->validate(request(), [
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'email' => 'email|required|string',
            'password' => 'password|required|string',
            'repassword' => 'password|required|string'
        ]);
        return $credentials;*/

        $datosUsuario = request()->except('_token');
        Users::insert($datosUsuario);
        return response()->json($datosUsuario);
    }

    public function login(){
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'pass' => 'required|string'
        ]);

        if(Auth::attempt($credentials)) {
            return 'Tu sesion se inicio';
        } else {
            return 'Error en la autenticacion';
        }
    }
    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }
}
