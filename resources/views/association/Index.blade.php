@extends('association.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">association</div>
                    <div class="card-body">
                        <a href="{{ url('/association/create') }}" class="btn btn-success btn-sm" title="Add New association">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Numero</th>
                                        <th>Adresse</th>
                                        <th> Description</th>
                                        <th>Actions</th>
                                    </tr>
                                    <!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
    {{$association->links("pagination::bootstrap-4")}}
</ul>
                                </thead>
                                <tbody>
                                @foreach($association as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->numero }}</td>
                                        <td>{{ $item->adresse }}</td>
                                        <td>{{ $item->description }}</td>

                                        <td>
                                            <a href="{{ url('/association/' . $item->id) }}" title="View association"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/association/' . $item->id . '/edit') }}" title="Edit association"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/association' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete association" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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