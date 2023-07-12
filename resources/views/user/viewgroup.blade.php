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
            <div class="card shadow-sm rounded-5">
            <div class="card-body ">
		<div class="container mt-4">

    @foreach($details as $value)
         <h1 class="fs-4 card-title fw-bold mb-2">{{$value->group_name}}</h1>
        <form action="" method="post">
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
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="paidby[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      {{$memberemail}}
                    </label>
                  </div>
                  {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="paidby[]">
                    <label class="form-check-label" for="flexCheckChecked">
                      User B
                    </label>
                  </div> --}}
                  @endforeach



            </div>
            <div class="form-group  mb-3">
                <label for="date" class="text-muted">Date</label>
                <input type="date" name="date" value=""  id="" class="form-control w-100">
            </div>
            
            <button type="submit" class="btn btn-secondary" name="save">Save</button>
        </form>
        @endforeach
    </div>
</div>
</div>
    </div>
</div>
@endsection