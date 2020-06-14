<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<div class="container">


    <div id="loading" class="loading text-center">
            <div class="display-4">Trwa ładowanie ustawień z serwera...</div>
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            </div>
        </div>
    <div class="col-lg-9 mx-auto my-5 rounded border" id="main" style="display: none;">
        <h3 class="mt-3">Edytuj schemat numeracji</h3>
        <hr>
        <div id="logs" style="display: none;">

        </div>
        <div class="p-4">

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Wzorzec:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control" id="pattern" placeholder="Przykład: %N/I/%m/%Y">
                </div>
            </div>

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Cykliczność:</label>
                <div class="col-sm-10">
                    <select id="inputState" class="form-control" name="cyclicity" id="cyclicity">
                        <option selected value="1">tygodniowo</option>
                        <option value="2">miesięcznie</option>
                        <option value="3">rocznie</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end">

                <button id="save" class="btn btn-primary ">Zapisz</button>

            </div>
        </div>

    </div>

</div>

<script src="js\scheme.js"></script>

@stop