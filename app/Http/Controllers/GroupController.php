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
  
       
       $group = new Groups;

       $group->group_name =  $req->group_name;
       $group->member_email = json_encode($req->member_email);
       $group->user_id =  $req->user_id;
       $group->save();

       return redirect('user/usergroupspage')->with('status', 'Created Successfully'); 
    }
public function viewgroup($id)
{
 $group_id = $id;
 $user_id = Auth::id();
 $details = Groups::where([['user_id','=',$user_id],
 ['id','=',$group_id]
 ])->get();

 $singlevalue = Groups::where([['user_id','=',$user_id],
 ['id','=',$group_id]
 ])->pluck('member_email')->first();

$membersdetails = json_decode($singlevalue);  
$test = explode(",", $membersdetails[0]);
// dd($test);  
// $all = Groups::all();
// $alll = $all->toArray();
// dd($membersdetails);
return view('user.viewgroup',compact('details','test'));
}

}
