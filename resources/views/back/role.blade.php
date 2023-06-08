@extends('back.master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h5>Roles</h5>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection