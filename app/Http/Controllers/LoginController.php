<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RolePermission;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function process(LoginRequest $request)
    {
       
       if($user = User::with('role')->where('name',$request->userName)->first())
       {
            if (Hash::check($request->password, $user->password)) {
                $rolePermission = RolePermission::where('user_id',$user->id)->first();
                Session::put('user',['id'=>$user->id,'name'=>$user->name,
                'role'=>$rolePermission ? $rolePermission->role_id : null]);
                return response()->json(["success"=>"User Name & Password Match"],200);
             
            }else{
                return response()->json(["errors"=>["password"=>"User Name & Password Not Match"]],401);
            }
       }else{
           return response()->json(["errors"=>["userName"=>"User Not Found in DataBase"]],401);
       }

    }

    public function logout(){
        Session::flush();
        return redirect()->route('admin-login')->with('SuccessMessage','Logut Successfully');
    }
}
