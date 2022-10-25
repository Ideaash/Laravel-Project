@extends('adherents.layout')
@section('content')
<div class="card">
  <div class="card-header">adherentus Page</div>
  <div class="card-body">
      
      <form action="{{ url('adherent/' .$adherents->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
       <!-- 'num_adherent', '', 'telphone','nom','prenom', 'sexe', 'date_naissance','ville' -->
        <input type="hidden" name="id" id="id" value="{{$adherents->id}}" id="id" />
        <label>Numero adherent</label></br>
        <input type="text" name="num_adherent" id="num_adherent" value="{{$adherents->num_adherent}}" class="form-control"></br>
        <label>Addresse</label></br>
        <input type="text" name="addresse" id="addresse" value="{{$adherents->addresse}}" class="form-control"></br>
        <label>Telephone </label></br>
        <input type="text" name="telphone" id="telphone" value="{{$adherents->telphone}}" class="form-control"></br>

        <input type="hidden" name="id" id="id" value="{{$adherents->id}}" id="id" />
        <label>Nom </label></br>
        <input type="text" name="nom" id="nom" value="{{$adherents->nom}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$adherents->address}}" class="form-control"></br>
        <label>Prenom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$adherents->prenom}}" class="form-control"></br>

        <label>Sexe</label></br>
        <input type="text" name="sexe" id="sexe" value="{{$adherents->sexe}}" class="form-control"></br>
        <label>Ville</label></br>
        <input type="text" name="sexe" id="ville" value="{{$adherents->ville}}" class="form-control"></br>
        <label>Date Naissance</label></br>
        <input type="date" name="date_naissance" id="ville" value="{{$adherents->date_naissance}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop