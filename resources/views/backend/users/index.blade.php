@extends('layouts/backend/app')

@push('css')
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('content')

   <section class="content-wrapper mt-5">
       <div class="bg-light p-4 rounded">
           <h1>Users</h1>
           <div class="lead">
               Manage your users here.
               <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
           </div>

           <div class="mt-2">
               @include('layouts.partials.messages')
           </div>


           <table id="example1" class="table table-bordered table-hover">
               <thead>
               <tr>
                   <th scope="col" width="1%">#</th>
                   <th scope="col" width="15%">Name</th>
                   <th scope="col">Email</th>
                   <th scope="col" width="10%">Username</th>
                   <th scope="col" width="10%">Roles</th>
                   <th scope="col" width="1%" colspan="3"></th>
               </tr>
               </thead>
               <tbody>
               @foreach($users as $user)
                   <tr>
                       <th scope="row">{{ $user->id }}</th>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td>{{ $user->username }}</td>
                       <td>
                           @foreach($user->roles as $role)
                               <span class="badge bg-primary">{{ $role->name }}</span>
                           @endforeach
                       </td>
                       <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">Show</a></td>
                       <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                       <td>
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                           {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                           {!! Form::close() !!}
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>

       </div>
   </section>
@endsection

@push('js')

    <!-- DataTables  & Plugins -->
    <script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
