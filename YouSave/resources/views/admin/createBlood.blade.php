@extends('layouts.main')

@section('content')

<style>
    .body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 5em;
    }

    h1 {
        color: #ae0505;
        text-align: center;
        margin-bottom: 2em;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #ae0505;
    }

    input[type="text"] {
        width: 50%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #ae0505;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 5px;
    }

    button:hover {
        background-color: #8b0303;
    }

    .error-message {
        color: #ff0000;
        margin-top: 5px;
    }

    .city-list {
        list-style: none;
        padding: 0;
    }

    .city-list li {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .city-list li .btn-group {
        display: flex;
        align-items: center;
    }

    .city-list li .btn {
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        padding: 8px 12px;
        transition: background-color 0.3s ease;
    }

    .city-list li .btn-update {
        background-color: #fb9403;
        margin-right: 5px;
    }

    .city-list li .btn-update:hover {
        background-color: #e58403;
    }

    .city-list li .btn-delete {
        background-color: #dc3545;
    }

    .city-list li .btn-delete:hover {
        background-color: #c82333;
    }

    .city-list li span {
        font-size: 1.1em;
        color: #333;
        margin-right: 10px;
    }
</style>

<div class="body">

    <h1>Ajouter Ville</h1>
    @if ($errors->any())
    <div class="error-message">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <form method="POST" action="{{ route('cities.store') }}">
        @csrf
        <div>
            <label for="city">Ville:</label>
            <input type="text" id="city" name="name" value="{{ old('name') }}">
            <button type="submit">Ajouter Ville</button>
        </div>
    </form>

    <h2>Villes : </h2>

    <ul class="city-list">
        @foreach($cities as $city)
        <li>
            <span>{{ $city->name }}</span>
            <div class="btn-group">
                <a  href="{{ route('edit', $city->id) }}" type="button" class="btn btn-update">Update</a>
                <form method="POST" action="{{ route('cities.destroy',  $city) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
            </div>
        </li>
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
{{-- @elseif(session('error'))
<script>
    Swal.fire({
        position: "top-end",
        icon: "error",
        title: "{{ session('error') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script> --}}
@endif

@endsection
