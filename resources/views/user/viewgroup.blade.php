@extends('layouts.usermasterlayout')

@section('title')
    ESMS | GROUPS
@endsection

@section('dashboard-title')
  Groups
@endsection

@section('content')
<div class="row container">
    <div class="col-md-5">
        @if (session('status'))
<div class="bg-info p-2">
{{session('status')}}
    
</div>
@endif
            <div class="card shadow-sm rounded-5">
            <div class="card-body ">
		<div class="container mt-4">
      <form action="" method="post">
    @foreach($details as $value)

         <h1 class="fs-4 card-title fw-bold mb-2">{{$value->group_name}} 
        
        </h1>
            @csrf
            <div class="form-group mb-3">
                <label for="Name" class="text-muted">Enter Description</label>
                <input type="text" name="description" value=""  id="" 
                class="form-control w-100">
                <input type="hidden" name="id" value=""  id="" class="form-control w-100">

            </div>
            <div class="form-group  mb-3">
                <label for="paid by" class="text-muted">Paid by</label>
               
            @foreach($test as $memberemail)
                <div class="form-check">
                   <div class=""> {{$memberemail}}  </div>  <input type="number" name="paidamount[]" id="" placeholder=" paid amount " > 
                    </label>
                </div>        
             @endforeach
            </div>
            <div class="form-group  mb-3">
              <label for="Total amount" class="text-muted">Total Amount</label>
              <input type="text" name="total-amount" value=""  id="" class="form-control w-100">
          </div>
            <div class="form-group  mb-3">
                <label for="date" class="text-muted">Date</label>
                <input type="date" name="date" value=""  id="" class="form-control w-100">
            </div>
            
            <button type="submit" class="btn btn-secondary mb-2 p-1" name="save">Save</button>

        </form>
       
        @endforeach
    </div>
</div>
</div>
    </div>


     <div class="col-md-5">
     <div class="card shadow-sm rounded-5">
        <div class="card-body ">
<div class="container mt-4">

    @foreach($details as $value)

     <h1 class="fs-4 card-title fw-bold mb-2">Edit Group</h1>
     <p class="text-warning">Click 'X' and press Edit button if you want to delete member</p>
    <form action="/user/updategroupdetails/{{$value->id}}" method="get">
        @csrf

        <div class="form-group mb-3">
            <label for="Name" class="text-muted">Name</label>
        
            <input type="text" name="group_name" value="{{$value->group_name}}"  id="" 
            class="form-control w-100" placeholder="Enter new Group name">
            <div class="danger">
                @error('group_name')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group  mb-3">
            <label for="email" class="text-muted">Members Email</label>          
            <input type="text"  data-role="taginput" name="member_email[]" id="" 
             value="@foreach($test as $memberemail){{$memberemail}}{{','}}
             @endforeach"
             class="form-control w-100"placeholder="Add new member" >
            <div class="danger">
                @error('member_email')
                    {{$message}}
                @enderror
            </div>
        </div>
     
        
        <button type="submit" class="btn btn-secondary" name="editbtn">Edit</button>
        
    </form>
    @endforeach
</div>
</div>
</div>



    </div> 
</div>
@endsection