@extends('back.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h5>User</h5>
                            <p>Edit Page</p>
                            <form action="{{url('admin/users/'.$user->id.'/update')}}" method="POST" class="form-group">
                                @csrf
                                <div >
                                    <label for="" >Name</label>
                                    <input type="text" class="form-control mt-2" value="{{$user->name}}">
                                </div>
                                <div>
                                    <label for="">Email</label>
                                    <input type="text" class="form-control mt-2" value="{{$user->email}}">
                                </div>
                                <h5>Roles</h5>
                                @foreach($roles as $role)
                                    <div>
                                        <input type="checkbox" id="label/{{$role->id}}" value="{{$role->id}}" name="role_id[]"
                                        @foreach ($user->roles as $userRole)
                                            @if ($userRole->name == $role->name)
                                                checked
                                            @endif
                                        @endforeach
                
                                        >
                                        <label for="label/{{$role->id}}">{{$role->name}}</label>
                                    </div>
                                @endforeach

                                <button class="btn btn-primary btn-sm mt-3">Add Role</button>
                            </form>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection