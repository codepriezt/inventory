<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\Controller;
use App\User;

class UserController extends Controller
{
    public function createNewUser(Request $request)
    {
            $this->validate($request , [
                'name'=> 'required',
                'email'=>'required',
                'password'=>'required'
            ]);

            $user = User::createUser($request);

            return response()->json($user);

           
    }


    public function createNewAdminUser(Request $request)
    {

      
            $this->validate($request , [
                'name'=> 'required',
                'email'=>'required',
                'password'=>'required',
                'type'=>'required'
            ]);

            $user = User::createAdminUser($request);

            if(!$user)
            {
                return back()->with('error' , 'unable to create user');
            }

            return back()->with('success' , 'Admin successfully created');
    }


    public function deleteUser($userId)
    {
        $user = User::where('id', $userId)->first();

        if (!$user) {
            return back()->with('error', "you post does not exist");
        }

        $user->delete();

        return redirect()->route('user.index')->with('info', "user deleted");
    }






    
}
