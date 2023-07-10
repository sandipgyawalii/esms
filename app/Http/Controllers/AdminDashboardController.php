<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class AdminDashboardController extends Controller
{
    public function index(){
        $id = Auth::id();
        $data['admin'] = User::where('id','=',$id)->first();
        return view('admin.admindashboard',compact('data'));

    }
    public function showuserdashboard(){
        // $id = Auth::id();
        // $data['admin'] = User::where('id','=',$id)->first();
        return view('user.userdashboard');

    }
    
  
    public function userdetails(){

        $users = User::all();
        return view('admin.userdetails')->with('users',$users);
    }

    public function deleteadmindata($id){
        $deletedata = User::find($id);
        $deletedata->delete();
        return view('auth.login');
    }

    
    public function  DisplayAdminDetailsPage($id){
        $id = Auth::id();
        $admindetails = Auth::user();
        return view('admin.editadmindetails')->with('admindetails',$admindetails);
    }


    public function updateadmindetails(Request $req){
        $data= User::find($req->id);
        // $data = new User;
       $data->name = $req->name;
       $data->email = $req->email;
       $data->password = $req->password;
       $data->save();
       
    //    dd($data);
     return redirect('/admindashboard')->with('status','Data Updated Sucessfully');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }



    // public function updateadmindetails(Request $req ,$id){
    //     $id = User::find($id);
    //     $data = new User;
    //    $data->name = $req->name;
    //    $data->email = $req->email;
    //    $data->password = $req->password;
    //    $data->save();
    // //    dd($data);
    //  return view('admin.admindashboard')->with('status','Data Updated Sucessfully');
    // }

    


}
