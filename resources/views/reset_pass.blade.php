<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

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

        <div class="p-4">
        <h4>Odzyskiwanie hasła</h4>
            <div id="errors">

            </div>
            <div class="form-group">
                <label>Adres email</label>
                <input type="email" class="form-control" id="rpass_email" placeholder="email">
            </div>

            <div class="form-group">
                <label>Numer telefonu</label>
                <input type="text" class="form-control" id="rpass_pnumber" placeholder="numer">
            </div>

            <div class="d-flex justify-content-end">

                <button class="btn btn-primary" id="login">Odzyskaj hasło</button>

            </div>

        </div>

    </div>

</div>



@stop