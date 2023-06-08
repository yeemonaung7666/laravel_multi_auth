@extends('back.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Dashboard Two (Staff Role)</p>
                <div>{{Auth::user()->name}}</div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger">Logout</button>
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
