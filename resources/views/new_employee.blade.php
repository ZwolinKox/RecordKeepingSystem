
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


    <div class="container">
        <div class="col-lg-9 mx-auto my-5 rounded border">
            <div class="p-4">
			<div class="form-group">
                    <label for="email">Imię i nazwisko</label>
                    <input type="text" class="form-control" id="email" placeholder="">
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
                        <input type="checkbox" class="form-check-input" id="administrator">
                        <label class="form-check-label" for="administrator">Administrator</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">

                    <button class="btn btn-primary" id="login">Dodaj</button>

                </div>
            </div>
        </div>
    </div>

@stop
