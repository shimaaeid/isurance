@extends('admin.layouts.master')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">

    <div class="container">
          <h2 class="text-center">Users Management</h2>
          <hr>
    </div>
        <!-- <div class="pull-left">
            <h2>Users Management</h2>
        </div> -->
        @can('add-user')
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Create New User</a>
        </div>
        @endcan
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>UserName</th>
   <th>Email</th>
   <th>Status</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->username }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->status }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       @can('edit-user')
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>


       @endcan
       @can('delete-user')


        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @endcan
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}

</div>
@endsection
