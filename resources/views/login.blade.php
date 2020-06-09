<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<style>

    #topbar
    {
        display: none;
    }

    #user_emb
    {
        display: none;
    }

    .header
    {
        display: block;
    }

    body
    {
        margin-top: 0;
    }


</style>
       <div class="container">


       <div class="col-lg-9 mx-auto my-5 rounded border">

            <div class="p-4">
                <div id="errors">
                    
                </div>
                <div class="form-group">
                    <label>Adres email</label>
                    <input type="email" class="form-control" id="email" placeholder="email">
                </div>

                <div class="form-group">
                    <label>Hasło</label>
                    <input type="password" class="form-control" id="passwd" placeholder="hasło">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                        <a href=""></a>
                    </div>
                </div>

                <div class="d-flex justify-content-end">

                    <button class="btn btn-primary" id="login">Zaloguj się</button>

                </div>
                 
            </div>

        </div>

       </div>

        <script src="js\login.js"></script>
        

@stop
