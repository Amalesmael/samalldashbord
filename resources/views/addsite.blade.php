@extends('layout')
@section('body-content')
 <h3 class="text-center m-5"> add SITE </h3>
<form action="{{url('site/add')}}" method="post">
    @csrf
    <div class="input-group m-3 ">
        <input type="text" class="form-control" value="id" aria-label="id" aria-describedby="basic-addon1" id="id" name="id">
      </div>


      <div class="input-group m-3">
        <input type="submit" class="btn btn-success col-12" value="save">
    </div>

</form>

@endsection
