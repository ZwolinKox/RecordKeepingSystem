<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<style>

    #topbar
    {
        display: none;
    }


</style>
       <div class="container">


       <div class="col-lg-9 mx-auto my-5 rounded border">

            <div class="p-4">

                <div class="form-group">
                    <label for="exampleDropdownFormEmail2">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleDropdownFormPassword2">Password</label>
                    <input type="password" class="form-control" id="passwd" placeholder="Password">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                        <label class="form-check-label" for="dropdownCheck2">Remember me</label>
                    </div>
                </div>

                <div class="d-flex justify-content-end">

                    <button class="btn btn-primary" id="login">Sign in</button>

                </div>
                
            </div>

        </div>

       </div>

        <script src="js\login.js"></script>
        

@stop
