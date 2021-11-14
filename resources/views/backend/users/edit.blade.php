@extends('layouts/backend/app')

@section('content')
    <section class="content-wrapper mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update user</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{ route('users.update', $user->id) }}">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{ $user->name }}"
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
                                    <input value="{{ $user->email }}"
                                           type="email"
                                           class="form-control"
                                           name="email"
                                           placeholder="Email address" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <input value="{{ $user->username }}"
                                           type="text"
                                           class="form-control"
                                           name="username"
                                           placeholder="Username" required>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                               <div class="form-group">
                                   <label for="role" class="form-label">Role</label>
                                   <select class="form-control"
                                           name="role" required>
                                       <option value="">Select role</option>
                                       @foreach($roles as $role)
                                           <option value="{{ $role->id }}"
                                               {{ in_array($role->name, $userRole)
                                                   ? 'selected'
                                                   : '' }}>{{ $role->name }}</option>
                                       @endforeach
                                   </select>
                                   @if ($errors->has('role'))
                                       <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                   @endif
                               </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update user</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
