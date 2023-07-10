@extends('layouts.masterlayout')

@section('title')
ESMS | User Details
@endsection

@section('content')

<div class="row container">
    <div class="col-md-5">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $row)
                <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <form action="manage" method="post">
                <td>
                    <input type="hidden" name="user_id" value="{{$row->id}}">
                    <input type="submit" value="Edit" class="btn btn-primary">
                </td>
                <td>
                    <input type="submit" value="Delete" class="btn btn-danger">
                </td>
            </form>                
              </tr>
          
              @endforeach
            </tbody>
          </table>
    </div>
</div> 
@endsection