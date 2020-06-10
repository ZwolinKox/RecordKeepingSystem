<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<div class="container">


    <div class="col-lg-9 mx-auto my-4">

        <div class="card">

            <div class="card-header p-3">

                <h5 id="userNameTitle">Pracownik 1</h5>
                <h6 id="userType" style="color: gray">pracownik</h6>

            </div>

            <div class="w-100"></div>

            <div class="card m-3 p-3">

                <h5>Zmień nazwę:</h5>

                <input type="text" class="form-control" value="Pracownik 1" id="edit_acc_name">

            </div>

            <div class="w-100"></div>

            <div class="card m-3 p-3">

                <h5>Zmień hasło:</h5>

                <input type="password" class="form-control mt-2" placeholder="Nowe hasło" id="edit_acc_newPassword">

                <input type="password" class="form-control mt-2" placeholder="Powtórz nowe hasło"
                    id="edit_acc_repeatPassword">

            </div>

            <div class="w-100"></div>

            <div class="card m-3 p-3">

                <h5>Zmień numer telefonu:</h5>

                <div class="input-group mb-2">

                    <div class="input-group-prepend">
                        <div class="input-group-text">+48</div>
                    </div>

                    <input type="text" class="form-control" id="edit_acc_tnum" value="000 000 000" placeholder="">

                </div>

            </div>

            <div class="w-100"></div>

            <div class="card m-3 p-3">

                <h5>Zmień adres e-mail:</h5>

                <input type="text" class="form-control" value="stary.email@example.com" id="edit_acc_email">

            </div>

            <div class="card m-3 p-3">

                <h5>Funkcja użytkownika</h5>

                <div class="form-group col-auto my-3">

                    <div class="form-check">

                        <input class="form-check-input" type="radio" id="edit_acc_def" checked="checked" name="wrrnt" value="option1">
                        <label class="form-check-label" for="edit_acc_def">Pracownik</label>

                        <div class="w-100"></div>

                        <input class="form-check-input" type="radio" id="edit_acc_adm" name="wrrnt" value="option1">
                        <label class="form-check-label" for="edit_acc_adm">Administrator</label>

                        





                    </div>

                </div>

            </div>

            <div class="card m-3 p-3">

                <h5>Blokowanie użytkownika</h5>

                <div class="form-group col-auto my-3">

                    <div class="form-check">
                    

                        <input class="form-check-input" type="radio" id="edit_acc_unlock" name="lock" checked="checked" value="option2">
                        <label class="form-check-label" for="edit_acc_unlock">Odblokuj</label>

                        <div class="w-100"></div>

                        <input class="form-check-input" type="radio" id="edit_acc_lock" name="lock" value="option1">
                        <label class="form-check-label" for="edit_acc_lock">Zablokuj</label>


                    </div>

                </div>

            </div>

            <div class="d-flex justify-content-end m-3">

                <a href="list_employee"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
                <button type="submit" class="btn btn-primary m-1">Zatwierdź</button>

            </div>


        </div>

    </div>

</div>

<script src="js/editAcc.js"></script>

@stop