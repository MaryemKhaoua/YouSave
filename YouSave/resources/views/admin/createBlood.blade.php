@extends('layouts.main')

@section('content')

<link rel="stylesheet" type="text/css" href="/css/createbld.css">

<div class="body">

    <h1>Ajouter type de sang</h1>
    @if ($errors->any())
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('bloods.store') }}">
        @csrf
        <div>
            <label for="blood">Type:</label>
            <input type="text" id="blood" name="type" value="{{ old('type') }}">
            <button type="submit">Ajouter Type</button>
        </div>
    </form>

    <h2>Types : </h2>

    <ul class="blood-list">
        @foreach($bloods as $blood)
        <li>
            <span>{{ $blood->type }}</span>
            <div class="btn-group">
                <button type="button" class="btn btn-update" data-toggle="modal" data-target="#updateModal{{ $blood->id }}">Update</button>
                <form method="POST" action="{{ route('bloods.destroy', $blood) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
            </div>
        </li>
        <!-- Update Modal -->
        <div class="modal fade" id="updateModal{{ $blood->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Blood Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Update form goes here -->
                        <form method="POST" action="{{ route('bloods.update', $blood) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="updateBloodType">New Blood Type</label>
                                <input type="text" class="form-control" id="updateBloodType" name="type" value="{{ $blood->type }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif

@endsection
