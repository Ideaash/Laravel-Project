@extends('association.layout')
@section('content')
<div class="card">
  <div class="card-header">association Page</div>
  <div class="card-body">
      
      <form action="{{ url('association/' .$association->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$association->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$association->name}}" class="form-control"></br>
        <label>Numero</label></br>
        <input type="text" name="numero" id="numero" value="{{$association->numero}}" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$association->adresse}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$association->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop