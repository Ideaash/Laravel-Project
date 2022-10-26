@extends('association.layout')
@section('content')
<div class="card">
  <div class="card-header">association Page</div>
  <div class="card-body">
      
      <form action="{{ url('association') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Numero</label></br>
        <input type="text" name="numero" id="numero" class="form-control"></br>
        <label>Addresse</label></br>
        <input type="text" name="addresse" id="addresse" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop