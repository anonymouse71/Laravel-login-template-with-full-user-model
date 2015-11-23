
@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">

                <span class="pull-left">
                   <h3><span class="glyphicon glyphicon-user"></span>  Users Details</h3>
                </span>

                <span class="pull-right">
                    <td><a href="{{ route('users.create') }}"><button class="btn btn-success">Create New Users</button></a></td>
                </span>



                </header>

                <div class="panel-body">
                    <table class="table table-stripped">
                        <tr>
                            <th>ID</th>
                            <th> Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Session</th>
                            <th>Reg. No</th>
                            <th>profile</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <tbody>

                       {{-- user table calling--}}
                        @foreach ($users as $users)
                            <tr>
                                    <td>{{$users->id}}</td>
                                    <td>{{ $users->email }}</td>


                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->phone }}</td>
                                    <td>{{ $users->session }}</td>
                                    <td>{{ $users->reg }}</td>






    @if(Auth::user()->email)
        <td><a href="{{ route('users.show', $users->id) }}"><button class="btn btn-success">Profile</button></a></td>
        <td><a href="{{ route('users.edit', $users->id) }}"><button class="btn btn-info">Edit</button></a></td>
        <td><a href="{{ route('users.destroy', $users->id) }}"><button class="btn btn-danger">Delete</button></a></td>
    @else
        <td>-----</td>
        <td>-----</td>
    @endif



</tr>

@endforeach

</tbody>
</table>
</div>
</section>
</div>
</div>




@stop


