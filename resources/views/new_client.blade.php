<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<div class="container-fluid">

    <div id="loading" class="loading text-center">
        <div class="display-4">Trwa ładowanie ustawień z serwera...</div>
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        </div>
    </div>

    <div id="main" style="display: none;" >

        <div class="row">

            <div class="col-md-6">
                <div id="error"></div>
                
                

                <div class="card">

                    <div class="card-header dark">Dane klienta</div>

                    <div class="col-auto my-3">

                        <div class="form-group">
                            <div class="form-check col-5">
                                <input class="form-check-input" type="checkbox" id="nclient_fac">
                                <label class="form-check-label" for="nclient_fac">Firma</label>
                            </div>

                        </div>

                        <div class="form-group">

                            <label for="nclient_name"><strong>Imię i nazwisko</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <input type="text" class="form-control" id="nclient_name" placeholder="">

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="nclient_group"><strong>Grupa</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-users" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <select class="form-control" id="nclient_group">
                                    <option>Brak grupy</option>
                                </select>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-header">Preferencje klienta</div>

                    <div class="col-auto  my-3">

                        <div class="form-group">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="nclient_email" value="option1">
                                <label class="form-check-label" for="nclient_email">Wysyłaj emaile informacyjne</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="nclient_sms" value="option2">
                                <label class="form-check-label" for="nclient_sms">Wysyłaj SMSy informacyjne</label>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-header dark">Adres</div>

                    <div class="col-auto my-3">

                        <div class="form-group">

                            <label for="nclient_address"><strong>Adres zamieszkania</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-home" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <input type="text" class="form-control" id="nclient_address" placeholder="">

                            </div>

                        </div>


                    </div>

                </div>
                

            </div>



            <div class="col-md-6">

                <div class="card">

                    <div class="card-header">Telefon</div>

                    <div class="col-auto my-3">

                        <div class="form-group">

                            <label for="nclient_tnum"><strong>Numer telefonu</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text">+48</div>
                                </div>

                                <input type="text" class="form-control" id="nclient_tnum" placeholder="000-00-00-00">

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="nclient_atnum"><strong>Alternatywny numer telefonu</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text">+48</div>
                                </div>

                                <input type="text" class="form-control" id="nclient_atnum" placeholder="000-00-00-00">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-header">Internet</div>

                    <div class="col-auto my-3">

                        <div class="form-group">

                            <label for="nclient_dea"><strong>Adres email</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>

                                <input type="text" class="form-control" id="nclient_dea" placeholder="">

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="nclient_aea"><strong>Alternatywny adres email</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>

                                <input type="text" class="form-control" id="nclient_aea" placeholder="">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-end">

                    <a href="/"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
                    <button id="nclient_sbutton" class="btn btn-success m-1">Utwórz klienta</button>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="js\newclient.js"></script>
@stop