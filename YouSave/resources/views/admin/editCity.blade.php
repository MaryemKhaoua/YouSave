@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="{{ route('cityUpdate', $city->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Nom du ville :</label>
                                <input type="text"  class="form-control"  name="name" value="{{ $city->name }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection