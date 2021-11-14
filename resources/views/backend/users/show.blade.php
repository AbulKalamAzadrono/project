@extends('layouts/backend/app')

@section('content')

    <section class="content-wrapper mt-5">
        <div class="bg-light p-4 rounded">
            <h1>User details</h1>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col" >Name</th>
                    <th scope="col">Email</th>
                    <th scope="col" >Username</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>

                    </tr>

                </tbody>
            </table>


        </div>
    </section>
@endsection
