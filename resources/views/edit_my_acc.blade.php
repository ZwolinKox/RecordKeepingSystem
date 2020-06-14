<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

    <div class="container">


        <div class="col-lg-9 mx-auto my-4">

            <div id="loading" class="loading text-center">
                <div class="display-4">Trwa ładowanie ustawień z serwera...</div>
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                </div>
            </div>

            <div id="main" style="display: none;">
            <div class="card">
                <div id="logs"></div>
                <div class="card-header p-3">

                    <h5 id="userName">Admninistrator 1</h5>
                    <h6 id="userType" style="color: gray">Admninistrator</h6>
                            
                </div>
                    
                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień nazwę:</h5>
                    
                    <input type="text" class="form-control" value="Administrator 1" id="edit_my_accadm_name">

                </div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień hasło:</h5>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changePassword">
                    Panel zmiany hasła
                    </button>
                    <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="changePasswordLabel">Zmiana hasła</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div id="passwordLogs"></div>

                            <input type="password" class="form-control mt-2" placeholder="Aktualne hasło" id="edit_my_acc_oldPassword">
                            
                            <input type="password" class="form-control mt-2" placeholder="Nowe hasło" id="edit_my_acc_newPassword">
                            
                            <input type="password" class="form-control mt-2" placeholder="Powtórz nowe hasło" id="edit_my_acc_repeatPassword">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button id="saveNewPassword" type="button" class="btn btn-primary">Zapisz</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="w-100"></div>

                <div class="card m-3 p-3">

                    <h5>Zmień adres e-mail:</h5>
                    
                        <input type="text" class="form-control" value="stary.email@example.com" id="edit_my_acc_email">

                </div>


                <div class="d-flex justify-content-end m-3">

                    <a href="/"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
                    <button id="send" type="submit" class="btn btn-primary m-1">Zatwierdź</button>

                </div>

            </div>
            </div>

        </div>

    </div>

    <script src="js\editMyAcc.js"></script>
    <script src="js\editPassword.js"></script>

    @stop