@extends('layouts.app')
@section('content')
 
 
<div class="card">
  <div class="card-header">Zones Vertes Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">nomZone : {{ $ZoneVertes->nomZone }}</h5>
        <p class="card-text">surfaceZone : {{ $ZoneVertes->surfaceZone }}</p>
        <p class="card-text">Gouvernorat : {{ $ZoneVertes->Gouvernorat }}</p>
        <h5 class="card-title">Délégation : {{ $ZoneVertes->Délégation }}</h5>
        <p class="card-text">Localité : {{ $ZoneVertes->Localité }}</p>
        <p class="card-text">PremierResponsable : {{ $ZoneVertes->PremierResponsable }}</p>
  </div>
       
    </hr>
  
  </div>
</div>