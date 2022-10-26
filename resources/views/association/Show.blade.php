@extends('association.layout')
@section('content')
<div class="card">
  <div class="card-header">association Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $association->name }}</h5>
        <h5 class="card-title">Numero : {{ $association->numero }}</h5>
        <p class="card-text">Adresse : {{ $association->adresse }}</p>
        <p class="card-text">Description : {{ $association->description }}</p>
  </div>
      
    </hr>
  
  </div>
</div>