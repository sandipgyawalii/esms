<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\User;

use Auth;

class GroupController extends Controller
{ 
    public function index()
    {
        $user_id = Auth::id();
        // dd($user_id);
        $data['user'] = User::where('id','=',$user_id)->first();
        $groupdetails = Groups::where('user_id','=',$user_id)->get();
    
        return view('user.usergroup')->with('data',$data)
        ->with('groupdetails',$groupdetails);
    }

    public function creategroup(Request $req)
    { 

        $req ->validate([
            'group_name' => 'required',
            'member_email' =>'required',
        ]);
    //     $inputs = $req->all();
    //    $member_email = $inputs['member_email'] ;
    //    $inputs['member_email'] = implode(',',$member_email);
       
       $group = new Groups;

       $group->group_name =  $req->group_name;
       $group->member_email = json_encode($req->member_email);
       $group->user_id =  $req->user_id;
       $group->save();

       return redirect('user/usergroupspage')->with('status', 'Created Successfully'); 
    }


}
