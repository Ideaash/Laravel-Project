@extends('evenement.layout')
@section('content')
<div class="card">
  <div class="card-header">Evenement</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $evenement->name }}</h5>
        <p class="card-text">description : {{ $evenement->description }}</p>
        <p class="card-text">Start Date : {{ $evenement->startDate }}</p>
        
  </div>
      
    </hr>
  
  </div>
</div>