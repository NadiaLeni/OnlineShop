<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function createUser(Request $request){

        users::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'password' => $request->password,
        ]);

        return redirect('http://127.0.0.1:8000/');
    }
}