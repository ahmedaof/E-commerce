<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
 

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {

        $validateData = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

   if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
       return response()->json('login');
    }
    return back()->withInput($request->only('email'));
}
