<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<style>
#topbar {
    display: none;
}

#user_emb {
    display: none;
}

.header {
    display: block;
}

body {
    margin-top: 0;
}
</style>
<div class="container">


    <div class="col-lg-9 mx-auto my-5 rounded border">
        <div id="logs"></div>
        <div class="p-4">
        <h4>Odzyskiwanie hasła</h4>
            <div id="errors">

            </div>
            <div class="form-group">
                <label>Nazwa użytkownika</label>
                <input type="email" class="form-control" id="email" placeholder="Adres email..">
            </div>

            <div class="form-group">
                <label>Nazwa użytkownika</label>
                <input type="text" class="form-control" id="name" placeholder="Nazwa..">
            </div>

            <div class="d-flex justify-content-end">

                <button class="btn btn-danger m-2" onclick="location.href = '/login'">Powrót do logowania</button>
                <button class="btn btn-primary m-2" id="login">Odzyskaj hasło</button>

            </div>

        </div>

    </div>

</div>

<script src="js\resetPass.js"></script>

@stop