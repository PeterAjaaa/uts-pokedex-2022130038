@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="mt-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="species" class="form-label">Species</label>
                        <input type="text" class="form-control" id="species">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="primary_type" class="form-label">Primary Type</label>
                        <select class="form-select" id="primary_type">
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
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="number" class="form-control" id="weight">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="height" class="form-label">Height</label>
                        <input type="number" class="form-control" id="height">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="hp" class="form-label">HP</label>
                        <input type="number" class="form-control" id="hp">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="attack" class="form-label">Attack</label>
                        <input type="number" class="form-control" id="attack">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="defense" class="form-label">Defense</label>
                        <input type="number" class="form-control" id="defense">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form>
                    <div class="mt-3">
                        <label for="is_legendary" class="form-label">Legendary Status</label>
                        <select class="form-select" id="is_legendary">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <form enctype="multipart/form-data">
                    <div class="mt-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photo">
                    </div>
                </form>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </div>
            <div class="d-flex justify-content-center col-4">
                <button type="button" class="btn btn-secondary mt-3">Cancel</button>
            </div>
            <div class="d-flex justify-content-end col-4">
                <button type="button" class="btn btn-danger mt-3">Reset</button>
            </div>
        </div>
    @endsection
