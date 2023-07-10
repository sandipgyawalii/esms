@extends('layouts.masterlayout')
@section('title')
ESMS | Admin Dashboard
@endsection

@section('content')
<div class="row container">
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
        @if($data['admin'])
      <tr>

        <th scope="row">{{ $data['admin']->name }}</th>
        <td>{{ $data['admin']->email }}</td>

        <td>
          <input type="hidden" name="admin_id" value="{{$data['admin']->id}}"> 
          <a href="displayadmindetailspage/{{$data['admin']->id}}" class="btn btn-primary">Edit</a>
        </td>
       
        <td> 
          <a href="deleteadmindata/{{$data['admin']->id}}" class="btn btn-danger">Delete</a>
           </td>
      </tr>
      @endif

    </tbody>
  </table>
</div>
</div>

@endsection
