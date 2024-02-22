@extends('layouts.usermasterlayout')

@section('title')
    ESMS | Groups
@endsection


@section('dashboard-title')
    Groups
@endsection

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-6 mt-2">
          <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning mb-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
      Create Group
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Groups</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card shadow-sm rounded-5">
              <div class="card-body ">
          <div class="container mt-4">  
           <h1 class="fs-4 card-title fw-bold mb-2"></h1>
          <form action="{{url('user/creategroup')}}" method="get">
              @csrf
              <div class="form-group mb-3">
                  <label for="Group Name" class="text-muted">Group Name</label>
                  <input type="text" name="group_name" value=""  id="" 
                  class="form-control w-100">
                 
              @if($data['user'])
                  <input type="hidden" name="user_id" value="{{$data['user']->id}}"  id="" class="form-control w-100">
  @endif
              </div>
              <div class="form-group  mb-3">
                  <label for="Members Email" class="text-muted">Members Email</label>
                  <input type="text" data-role="taginput" name="member_email[]" id=""  value="" class="form-control w-100">
              
              </div>
             
              
              
              {{-- <button type="submit" class="btn btn-secondary" name="create_group ">Create Group</button> --}}

              @if($errors->any())
              <div class="danger">
                 @foreach ($errors->all() as $error)
                     {{$error}}
                 @endforeach
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="create_group" class="btn btn-primary">Save </button>
      </div>
    </form>
        </div>
      </div>
    </div>
    @if(session('status'))
    <div class="bg-info  rounded-5   p-1 mb-2 w-50 ">{{session('status')}}</div>
      @endif

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Groups Name</th>
            <th scope="col">Action</th>
            <th scope="col">Delete</th>




          </tr>
        </thead>
        <tbody>
            @foreach ($groupdetails as $row)
            <tr>
              <td>{{$row->group_name}} 
              <span class=" bg-info bg-gradient text-dark rounded-circle p-1">14</span>       
                </td>  
          
            <td>
              <a href="/user/viewgroups/{{$row->id}}" class=""><i class="fa fa-lg fa-cog" aria-hidden="true"></i>

              </a> 
            </td>
            <td>
              <a href="/user/deletegroup/{{$row->id}}" class=""><i class="fa-lg fa fa-trash" aria-hidden="true"></i>
              </a> 
            </td>
            
           
          </tr>
      
          @endforeach
        </tbody>
      </table>
              </div>
    </div>
</div>
@endsection