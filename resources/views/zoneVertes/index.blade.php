@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">adherents</div>
                    <div class="card-body">
                        <a href="{{ url('/adherent/create') }}" class="btn btn-success btn-sm" title="Add New adherent">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>nomZone</th>
                                        <th>surfaceZone</th>
                                        <th>Gouvernorat</th>
                                        <th>Délégation</th>
                                        <th>Localité</th>
                                        <th>PremierResponsable</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach( $ZoneVertes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nomZone }}</td>
                                        <td>{{ $item->surfaceZone }}</td>
                                        <td>{{ $item->Gouvernorat }}</td>
                                        <td>{{ $item->Délégation }}</td>
                                        <td>{{ $item->Localité }}</td>
                                        <td>{{ $item->PremierResponsable }}</td>

                                        <td>
                                            <a href="{{ url('/ZoneVertes/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/ZoneVertes/' . $item->id . '/edit') }}" title="Edit Zone"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/ZoneVertes' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection