@extends('adherents.layout')
@section('content')
<div class="card">
  <div class="card-header">adherentus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name et Prenom : {{ $adherents->nom }}  {{ $adherents->prenom }}</h5>
        <p class="card-text">Addresse : {{ $adherents->addresse }}</p>
        <p class="card-text">Numero ADH : {{ $adherents->num_adherent }}</p>
        <p class="card-text">Telephone : {{ $adherents->telphone }}</p>
        <p class="card-text">Sexe : {{ $adherents->sexe }}</p>
        <p class="card-text">Date de naissance : {{ $adherents->date_naissance }}</p>
        <p class="card-text">Ville : {{ $adherents->ville }}</p>

  </div>
      
    </hr>
  
  </div>
</div>


