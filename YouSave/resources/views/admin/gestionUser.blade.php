@extends('layouts.main')

@section('content')

@if(session('success'))
<div class="alert alert-success" id="alert">
    {{ session('success') }}
</div>
@endif

<main>
    <div class="container text-center pt-5">
        <div class="welcome-page mb-5">
            <h2 class="welcome-message">Gestion des utilisateurs</h2>
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
                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    {{-- <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="form4Example1" class="form-label">User Role</label>
                                            <select id="role" name="role" class="form-control">
                                                @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fermer</button>
                                        <form method="POST" action="{{ route('updateUser', $user->id) }}">
                                            @csrf
                                            @method('PUT')

                                            <label for="role_id">Select Role:</label>
                                            <select name="role_id" id="role_id">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>

                                            <button type="submit">Update Role</button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Edit Modal -->
                        <form action="{{ route('banuser', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir bannir cet utilisateur ?')">Bannir</button>
                        </form>

                        <form action="{{ route('unbanUser', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success" onclick="return confirm('Êtes-vous sûr de vouloir débannir cet utilisateur ?')">Débannir</button>
                        </form>
                    </td>
                    @else
                    <td style="color: red;">Banned</td>
                    <td>
                        <form action="{{ route('unbanUser', $user->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success" onclick="return confirm('Êtes-vous sûr de vouloir débannir cet utilisateur ?')">Débannir</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</main>

@endsection
