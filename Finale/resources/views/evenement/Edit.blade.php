@extends('evenement.layout')
@section('content')
<div class="card">
  <div class="card-header">Modifier Evenement</div>
  <div class="card-body">
      
      <form action="{{ url('evenement/' .$evenement->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$evenement->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$evenement->name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$evenement->description}}" class="form-control"></br>
        <label>Start Date</label></br>
        <input type="date" name="startDate" id="startDate" value="{{$evenement->startDate}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop