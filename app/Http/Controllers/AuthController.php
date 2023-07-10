<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show Register
    public function register()
    {
    return view('auth.register');
    }
     
    // Do Register
     public function AuthRegister(Request $request)
     {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
          ]);

          $users = new User;
 
        $users->name = $request->username;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        return redirect('login')->with('status', 'Registered Successfully');
        }

    // Show Login
    public function login()
    {
    return view('auth.login');
    }

    // Do login
    public function AuthLogin(Request $request)
    {
    $validatedData = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    if(Auth::attempt(['email' => $request->email, 'password'=>$request->password])){
        $user = Auth::user(); // Retrieve the currently authenticated user...
        $id = Auth::id();
        $request->session()->put('admin_id',$id);

        if(Auth::user()->user_type == 1)
        {
        return redirect('/admindashboard');

        }elseif(Auth::user()->user_type == 2)
        {

        return redirect('user/userdashboard');

        }

    }else
    {
        return redirect('login')->with('status', 'Invalid Details');

    }

    }
}


// $user = Auth::user(); // Retrieve the currently authenticated user...
// $id = Auth::id();
// $username = auth()->user()->name;
// $data['user'] = User::where('id','=',$id)->first();
// $request->session()->put('admin_name',$username);
// $request->session()->put('admin_id',$id);