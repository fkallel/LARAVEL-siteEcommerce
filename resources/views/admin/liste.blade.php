
@extends('layouts.app')

@section('content')

<div class="card my-4">
    <h5 class="card-header">Recherche</h5>
    <form class="card-body" action="{{route('users.search')}}" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher..." name="q">
            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
        </div>
    </form>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="display:flex">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">role</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)


                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <form action="{{route('admin.users.delete',$user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


            </div>

        </div>
    </div>



<h1>hello</h1>
@endsection
