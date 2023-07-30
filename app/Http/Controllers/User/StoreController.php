<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StoreController extends Controller
{
    public function userRegistration(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string',
        ]);

        $data['password'] = Hash::make($data['password']); // хеширум пароль
        User::firstOrCreate([
            'email' => $data['email']
        ], $data);

        return $data;
    }
}
