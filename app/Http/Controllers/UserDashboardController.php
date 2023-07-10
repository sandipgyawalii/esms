<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use App\Models\User;
use Session;

class UserDashboardController extends Controller
{
    public function index(){
        return view('user.userdashboard');
    }

    public function userlogout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function showuserdetails()
    {
        $user_id = Auth::id();
        $userdata['user'] = User::where('id','=',$user_id)->first();
        return view('user.userdetails',compact('userdata'));

    }

    public function DisplayUserDetailsPage()
    {   $user_id = Auth::id();
        $userdata['user'] = User::where('id','=',$user_id)->first();
        return view('user.edituserdetails',compact('userdata'));
    }

    public function updateuserdetails(Request $request)
    {
    $user_id = Auth::id();
    $userdata = User::find($user_id);
    $userdata->name = $request->name;
    $userdata->email = $request->email;
    $userdata->password = $request->password;
    $userdata->save();

    return redirect('user/yourdetails')->with('status','Successfully updated');
    }

public function deleteuserdetails()
{
    $user_id = Auth::id();
    $userdata = User::find($user_id);
    $userdata->delete();
    return redirect('login');
}


}
