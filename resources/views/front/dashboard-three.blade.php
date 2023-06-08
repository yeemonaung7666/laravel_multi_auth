@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
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
    </div>
</div>
@endsection
