@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <h1>Edit A Pokemon!</h1>
        <form action="{{ route('pokemon.update', $pokemon) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-12">
                    <div class="mt-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $pokemon->name) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="species" class="form-label">Species</label>
                        <input type="text" class="form-control" id="species" name="species"
                            value="{{ old('species', $pokemon->species) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="primary_type" class="form-label">Primary Type</label>
                        <select class="form-select" id="primary_type" name="primary_type"
                            value="{{ old('primary_type', $pokemon->primary_type) }}">
                            <option value="Grass">Grass</option>
                            <option value="Fire">Fire</option>
                            <option value="Water">Water</option>
                            <option value="Bug">Bug</option>
                            <option value="Normal">Normal</option>
                            <option value="Poison">Poison</option>
                            <option value="Electric">Electric</option>
                            <option value="Ground">Ground</option>
                            <option value="Fairy">Fairy</option>
                            <option value="Fighting">Fighting</option>
                            <option value="Psychic">Psychic</option>
                            <option value="Rock">Rock</option>
                            <option value="Ghost">Ghost</option>
                            <option value="Ice">Ice</option>
                            <option value="Dragon">Dragon</option>
                            <option value="Dark">Dark</option>
                            <option value="Steel">Steel</option>
                            <option value="Flying">Flying</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-control" name="weight" id="weight"
                            value="{{ old('weight', $pokemon->weight) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="height" class="form-label">Height</label>
                        <input type="number" class="form-control" name="height" id="height"
                            value="{{ old('height', $pokemon->height) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="hp" class="form-label">HP</label>
                        <input type="number" class="form-control" name="hp" id="hp"
                            value="{{ old('hp', $pokemon->hp) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="attack" class="form-label">Attack</label>
                        <input type="number" class="form-control" name="attack" id="attack"
                            value="{{ old('attack', $pokemon->attack) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="defense" class="form-label">Defense</label>
                        <input type="number" class="form-control" name="defense" id="defense"
                            value="{{ old('defense', $pokemon->defense) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mt-3">
                        <label for="is_legendary" class="form-label">Legendary Status</label>
                        <select class="form-select" id="is_legendary" name="is_legendary"
                            value="{{ old('is_legendary', $pokemon->is_legendary) }}">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                </div>
                <div class="col mt-3">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
                <div class="d-flex col justify-content-end mt-3">
                    <a href="{{ route('pokemon.index') }}" class="btn btn-secondary mt-3">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
