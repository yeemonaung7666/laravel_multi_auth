@extends('back.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Dashboard One</p>
                <div>{{Auth::user()->name}}</div>
                <ul>
                    <li>Name : :{{Auth::user()->name}}</li>
                    <li>Email : :{{Auth::user()->email}}</li>
                    <li>
                        Roles
                        @foreach (Auth::user()->roles as $role)
                          <div>{{$role->name}}</div>  
                        @endforeach
                    </li>
                </ul>
                <a href="{{ url('admin/users')}}" class="btn btn-primary">User</a>
                <a href="{{ url('admin/roles')}}" class="btn btn-secondary">Roles</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf                    
                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to logout?')">Logout</button>
                </form>
            </div>
        </div>
        <hr>
        <div>
            @foreach(Auth::user()->roles as $role)
                @if($role->name == 'Manager')
                    <a class="btn btn-primary" href="{{ url('admin/managers')}}">Dashboard One</a>
                @elseif($role->name == 'Staff')
                    <a class="btn btn-primary" href="{{ url('admin/staffs')}}">Dashboard Two</a>
                @elseif($role->name == 'User')
                    <a class="btn btn-primary" href="{{ url('admin/normalusers')}}">Dashboard Three</a>
                @endif

            @endforeach
        </div>
    </div>
    
@endsection
