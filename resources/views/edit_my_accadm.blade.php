<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

    <div class="container">


        <div class="col-lg-9 mx-auto my-4">

            <div class="card">

                <div class="card-header p-3">

                    <h5>Admninistrator 1</h5>
                    <h6 style="color: gray">Admninistrator</h6>
                            
                </div>
                    
                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień nazwę:</h5>
                    
                        <input type="text" class="form-control" value="Administrator 1" id="edit_my_accadm_name">

                        <div class="d-flex justify-content-end mt-2 mr-3">
                            <button type="submit" class="btn btn-primary">Zatwierdź</button>
                        </div>
                    

                </div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień hasło:</h5>

                        <input type="password" class="form-control mt-2" placeholder="Aktualne hasło" id="edit_my_accadm_oldPassword">
                    
                        <input type="password" class="form-control mt-2" placeholder="Nowe hasło" id="edit_my_accadm_newPassword">
                        
                        <input type="password" class="form-control mt-2" placeholder="Powtórz nowe hasło" id="edit_my_accadm_repeatPassword">

                        <div class="d-flex justify-content-end mt-2 mr-3">
                            <button type="submit" class="btn btn-primary">Zatwierdź</button>
                        </div>
                        
                    

                </div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień adres e-mail:</h5>
                    
                        <input type="text" class="form-control" value="stary.email@example.com" id="edit_my_accadm_email">
                        

                        <div class="d-flex justify-content-end mt-2 mr-3">
                            <button type="submit" class="btn btn-primary">Zatwierdź</button>
                        </div>

                </div>

            </div>

        </div>

    </div>

    @stop