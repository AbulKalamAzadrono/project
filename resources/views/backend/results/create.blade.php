@extends('layouts/backend/app')

@section('content')
    <section class="content-wrapper mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Result Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('results.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{ old('name') }}"
                                           type="text"
                                           class="form-control"
                                           name="name"
                                           placeholder="Name" required>

                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input value="{{ old('email') }}"
                                           type="email"
                                           class="form-control"
                                           name="email"
                                           placeholder="email" required>

                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <input value="{{ old('username') }}"
                                           type="text"
                                           class="form-control"
                                           name="username"
                                           placeholder="Username" required>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save user</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
