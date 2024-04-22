@extends('layouts.main')

@section('content')

@if(session('success'))
<div class="alert alert-success" id="alert">
    {{ session('success') }}
</div>
@endif

<main style="margin-right: 30%;">
    <div class="container pt-2">
        <div class="welcome-page" style="margin-bottom: 10%; margin-left: 30%">
            <h2 class="welcome-message">Users Page</h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nom}} {{$user->prenom}}</td>
                    <td>
                        @foreach ($user->role as $role)
                            {{ $role->name }}
                        @endforeach
                    </td>
                    @if ($user->status === 1)
                    <td>Active</td>
                    <td>
                        <a type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}">Edit</a>
                        <!-- Edit -->
                        <form method="POST" action="{{route ('updateUser', $user->id)}}">
                            @csrf
                            <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="form4Example1" class="form-label">User Role</label>
                                                <select id="role" name="role" class="form-control">
                                                    @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button name="submit" type="submit" value="update" class="btn btn-dark float-end">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="{{route('banuser', $user->id)}}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Ban This User?')">Ban</button>
                        </form>
                    </td>
                    @else
                    <td style="color: red;">Banned</td>
                    <td>-</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</main>

@endsection
