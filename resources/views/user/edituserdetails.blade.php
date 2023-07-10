@extends('layouts.usermasterlayout')

@section('title')
ESMS | Edit Information
@endsection

@section('dashboard-title')
    Details
@endsection

@section('content')

<div class="row container">
    <div class="col-md-5">
            <div class="card shadow-sm rounded-5">
            <div class="card-body ">
		<div class="container mt-4">

    
         <h1 class="fs-4 card-title fw-bold mb-2">Edit Admin Details</h1>
        <form action="{{url('user/updateuserdetails')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="Name" class="text-muted">Name</label>
                @if($userdata['user'])
                <input type="text" name="name" value="{{$userdata['user']->name}}"  id="" 
                class="form-control w-100">

            </div>
            <div class="form-group  mb-3">
                <label for="email" class="text-muted">Email</label>
                <input type="email" name="email" id=""  value="{{$userdata['user']->email}}" class="form-control w-100">
            </div>
            <div class="form-group  mb-3">
                <label for="password" class="text-muted">Password</label>
                <input type="password" name="password" value=""  id="" class="form-control w-100">
            </div>
            
            <button type="submit" class="btn btn-secondary" name="editbtn">Edit</button>
            @endif
        </form>
    </div>
</div>
</div>
    </div>
</div>
@endsection

