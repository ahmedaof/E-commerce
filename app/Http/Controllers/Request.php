<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use DB;
class Request extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['login','signup']]);
    }

    public function signup(Request $request){
     
        $validateData = $request->validate([
          'email' => 'required|unique:users|max:255',
          'name' => 'required',
          'password' => 'required|min:6|confirmed'
         ]);
   
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        DB::table('users')->insert($data);
   
        return $this->login($request);
   
   
   
       }



}