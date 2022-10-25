@extends('adherents.layout')
@section('content')
<div class="card">
  <div class="card-header">adherentus Page</div>
  <div class="card-body">
      
      <form action="{{ url('adherent') }}" method="post">
        {!! csrf_field() !!}
        <label>Numero ADH</label></br>
        <input type="text" name="num_adherent" id="num_adherent" class="form-control"></br>
        <label>Nome</label></br>
        <input type="text" name="nom" id="nom" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>Sexe</label></br>
        <input type="text" name="sexe" id="sexe" class="form-control"></br>
        <label>Date de naissance</label></br>
        <input type="text" name="date_naissance" id="date_naissance" class="form-control"></br>
        <label>Addresse</label></br>
        <input type="text" name="addresse" id="addresse" class="form-control"></br>
        <label>Ville</label></br>
        <input type="text" name="ville" id="ville" class="form-control"></br>
        
        <label>Telphone</label></br>
        <input type="text" name="telphone" id="telphone" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop