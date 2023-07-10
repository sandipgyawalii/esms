@extends('layouts.masterlayout')

@section('title')

    ESMS | Edit Admin Details

@endsection

@section('content')

<div class="row container">
    <div class="col-md-5">
            <div class="card shadow-sm rounded-5">
            <div class="card-body ">
		<div class="container mt-4">

    
         <h1 class="fs-4 card-title fw-bold mb-2">Edit Admin Details</h1>
        <form action="/updateadmindetails/{{$admindetails['id']}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="Name" class="text-muted">Name</label>
                <input type="text" name="name" value="{{$admindetails['name']}}"  id="" 
                class="form-control w-100">
                <input type="hidden" name="id" value="{{$admindetails['id']}}"  id="" class="form-control w-100">

            </div>
            <div class="form-group  mb-3">
                <label for="email" class="text-muted">Email</label>
                <input type="email" name="email" id=""  value="{{$admindetails['email']}}" class="form-control w-100">
            </div>
            <div class="form-group  mb-3">
                <label for="password" class="text-muted">Password</label>
                <input type="password" name="password" value=""  id="" class="form-control w-100">
            </div>
            
            <button type="submit" class="btn btn-secondary" name="editbtn">Edit</button>
        </form>
    </div>
</div>
</div>
    </div>
</div>

@endsection