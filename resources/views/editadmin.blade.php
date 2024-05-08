@extends('layout')
@section('body-content')
 <h3 class="text-center m-5"> EDIT ADMIN </h3>
<form action="{{url('admin/update')}}" method="post">
    @csrf
    <div class="input-group m-3 ">
        <input type="text" class="form-control" value="{{ $admin->id }}" aria-label="id" aria-describedby="basic-addon1" id="id" name="id">
      </div>
    <div class="input-group m-3 ">
        <input type="text" class="form-control" value="{{ $admin->name }}" aria-label="Username" aria-describedby="basic-addon1" id="name" name="name">
      </div>
      <div class="input-group m-3 ">
        <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" aria-label="email">

      </div>
      <div class="input-group m-3 ">
        <input type="text" class="form-control" value="{{ $admin->password }}" aria-label="password" aria-describedby="basic-addon1" id="password" name="password">
      </div>

      <div class="input-group m-3">
        <input type="submit" class="btn btn-success col-12" value="save">
    </div>

</form>







@endsection
