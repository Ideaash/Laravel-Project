@extends('layouts.app')



@section('styles')

@endsection


@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
       
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Starter Page</li>
           </ol>
         </div><!-- /.col -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
           
   



   <!-- MAIN CONTENT -->

   <div class="container">
       <div class="row">
           <div class="col-md-9">
               <div class="card">
                   <div class="card-header">association</div>
                   <div class="card-body">
                       <a href="{{ url('/association/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
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

         <!-- END MAIN CONTENT -->





 </div>
 <!-- /.content-wrapper -->
@endsection

@section('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>

@endsection
