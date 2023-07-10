@extends('layouts.usermasterlayout')

@section('title')
    ESMS | User Details
@endsection

@section('dashboard-title')
Details
@endsection

@section('content')
<div class="row container">
  <div class="col-md-8"></div>
  @if(session('status'))
  <div class="bg-info p-3 rounded-5 ms-auto"> {{session('status')}} </div>
    @endif

  <div class="col-md-5">
<table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @if($userdata['user'])
      <tr>

        <th scope="row">{{ $userdata['user']->name }}</th>
        <td>{{ $userdata['user']->email }}</td>

        <td>
          {{-- <input type="hidden" name="admin_id" value="{{$data['admin']->id}}">  --}}
          <a href="{{url('user/displayuserdetailspage')}}" class="btn btn-primary">Edit</a>
        </td>
       
        <td> 
          <a href="{{url('user/deleteuserdetails')}}" class="btn btn-danger">Delete</a>
           </td>
      </tr>
      @endif

    </tbody>
  </table>
</div>
</div>
    
@endsection
