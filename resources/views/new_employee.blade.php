
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


    <div class="container">

        <div id="successCreateEmployee" style="display: none;" class="text-center">
            <div class="row">
                <div class="col"><div class="display-4">Pomyślnie utworzono pracownika</div></div>
            </div>

            <div class="row" style="margin-top: 15px;">
                <div class="col"><button type="button" onclick="window.history.back()" class="btn btn-danger m-1">Powrót</button>
                <button onclick="location.reload()" class="btn btn-success m-1">Utwórz kolejnego pracownika</button></div>
            </div>
            
            </div>
        </div>

        <div class="col-lg-9 mx-auto my-5 rounded border" id="main">
            <div class="p-4">

            <div id="errors"></div>

			<div class="form-group">
                    <label for="email">Imię i nazwisko</label>
                    <input type="text" class="form-control" id="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="passwd">Hasło</label>
                    <input type="password" class="form-control" id="passwd" placeholder="">
                </div>
				<div class="form-group">
                    <label for="passwd2">Powtórz hasło</label>
                    <input type="password" class="form-control" id="passwd2" placeholder="">
                </div>
                <div class="form-group">
                    <div class="form-check">  
                        <input type="checkbox" class="form-check-input" id="admin">
                        <label class="form-check-label" for="admin">Administrator</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">

                <button class="btn btn-danger m-1" onclick="window.history.back()">Powrót</button>
                    <button class="btn btn-primary m-1" id="create">Dodaj</button>

                </div>
            </div>
        </div>
    </div>

    <script src="js/newEmployee.js"></script>
@stop
