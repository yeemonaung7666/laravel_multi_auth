@extends('back.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h5>Users</h5>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Roles</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="btn  btn-secondary  badge">{{$role->name}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach(Auth::user()->roles as $role)
                                        @if($role->name == "Manager")
                                            <a href="{{url('admin/users/'.$user->id.'/edit')}}" class="btn btn-info">Manage Roles</a>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection