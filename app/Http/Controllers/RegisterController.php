<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerUser(RegisterUserRequest $request)
    {
        
        if($request->hasFile('image'))
        {
            $filename = 'image_' . time() . '.' . $request->image->extension();
            $request->image->storeAs('files/company', $filename , 'public');
        }

        $user = User::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
            'gender' => $request->gender,
            'address' => $request->address,
            'image' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    
        return redirect('/dashboard');
    }
}
