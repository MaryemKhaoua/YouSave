@extends('layouts.main')
@section('content')
<style>
     #srch{
        text-align: center;
        margin-top: 50px;
        color: #670505;
    }
</style>
<div class="container mt-5">
    <h1 class="mb-4 " id="srch">Trouvez des YouSavers près de vous</h1>
    <form action="" method="GET">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="city" class="form-label">Ville :</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Entrez la ville">
            </div>
            <div class="col-md-6">
                <label for="blood_type" class="form-label">Type de Sang :</label>
                <select class="form-select" id="blood_type" name="blood_type">
                    <option value="" selected disabled>Choisissez le type de sang</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-danger">Rechercher</button>
    </form>
</div>
@endsection