<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

    <div class="container">


        <div class="col-lg-9 mx-auto my-4">

            <div class="card">

                <div class="card-header p-3">

                    <h5>Pracownik 1</h5>
                    <h6 style="color: gray">Pracownik</h6>
                            
                </div>
                    
                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień nazwę:</h5>
                    
                    <input type="text" class="form-control" value="Pracownik 1" id="edit_my_accdef_name" disabled>


                </div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień hasło:</h5>

                        <input type="password" class="form-control mt-2" placeholder="Aktualne hasło" id="edit_my_accdef_oldPassword">
                    
                        <input type="password" class="form-control mt-2" placeholder="Nowe hasło" id="edit_my_accdef_newPassword">
                        
                        <input type="password" class="form-control mt-2" placeholder="Powtórz nowe hasło" id="edit_my_accdef_repeatPassword">
                        
                </div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień numer telefonu:</h5>
                    
                    <div class="input-group mb-2">

                        <div class="input-group-prepend">
                            <div class="input-group-text">+48</div>
                        </div>

                        <input type="text" class="form-control" id="edit_my_accdef_tnum" value="000 000 000" placeholder="">

                    </div>

                </div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień adres e-mail:</h5>
                    
                        <input type="text" class="form-control" value="stary.email@example.com" id="edit_my_accdef_email" disabled>
                        
                </div>

                <div class="d-flex justify-content-end m-3">

                    <a href="/"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
                    <button type="submit" class="btn btn-primary m-1">Zatwierdź</button>

                </div>

            </div>

        </div>

    </div>

    @stop