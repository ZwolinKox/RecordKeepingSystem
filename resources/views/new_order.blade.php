<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<div class="container-fluid">

    <div>

        <div class="row">

            <div class="col-md-6">
            <div id="error"></div>
                <div class="card">

                    <div class="col-auto my-1">

                        <div class="form-group">

                            <label for="norder_type"><strong>Typ przedmiotu naprawy</strong></label>

                            <div class="input-group mb-1">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><strong>*</strong></div>
                                </div>

                                <select class="form-control" id="norder_type" name="typ">
                                    <option>1</option>
                                </select>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="norder_mnfctr"><strong>Producent</strong></label>
                            <input type="text" class="form-control" id="norder_mnfctr" name="producent" placeholder="">

                        </div>

                        <div class="form-group">

                            <label for="norder_model"><strong>Model</strong></label>
                            <input type="text" class="form-control" id="norder_model" name="model" placeholder="">

                        </div>

                        <div class="form-group">

                            <label for="norder_serial"><strong>Numer seryjny</strong></label>

                            <div class="input-group mb-1">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-tag" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <input type="text" class="form-control" id="norder_serial" placeholder="">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="form-group col-auto my-3">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="norder_def" checked="checked" name="wrrnt" value="option1">
                            <label class="form-check-label" for="norder_wrrnt">Naprawa zwykła</label>

                            <div class="w-100"></div>
                        
                            <input class="form-check-input" type="radio" id="norder_wrrnt" name="wrrnt" value="option1">
                            <label class="form-check-label" for="norder_wrrnt">Naprawa gwarancyjna</label>


                            <div class="row wrrnt_child">

                                <div class="form-group col-lg-6 float-left">
                                    <label for="norder_stwrrnt"><strong>Data zakupu</strong></label>
                                    <input type="date" class="form-control" id="norder_stwrrnt" name="rozpczecie" placeholder="">
                                </div>

                                <div class="form-group col-lg-6 float-right">
                                    <label for="norder_sewrrnt"><strong>Numer dokumentu zakupu</strong></label>
                                    <div class="input-group mb-1">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon-tag" style="font-size: 15px;"></i></div>     
                                        </div>
                                        <input type="text" class="form-control" id="norder_sewrrnt" placeholder="">

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto mt-3 mb-3">

                        <div class="row">

                            <div class="form-group col-lg-6 m-auto">
                                <label for="norder_in"><strong>Data rozpoczęcia naprawy</strong></label>
                                <input type="date" class="form-control" id="norder_in" name="rozpczecie" placeholder="">
                            </div>

                            <div class="form-group col-lg-6 m-auto">
                                <label for="norder_out"><strong>Data zakończenia naprawy</strong></label>
                                <input type="date" class="form-control" id="norder_out" name="zakonczenie"
                                    placeholder="">
                            </div>

                        </div>

                        <div class="row">

                            <label class="mx-auto my-1 text-center"><strong>Szacowana cena naprawy, którą akceptuje
                                    klient w momencie przyjmowania naprawy</strong></label>

                            <div class="form-group col-lg-4">

                                <label for="norder_cost"><strong>Netto</strong></label>

                                <div class="input-group mb-2">

                                    <input type="text" class="form-control" id="norder_cost" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">zł</div>
                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-lg-4">

                                <label for="norder_vat"><strong>Vat</strong></label>

                                <div class="input-group mb-2">

                                    <input type="number" class="form-control" id="norder_vat" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">%</div>
                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-lg-4">

                                <label for="norder_costt"><strong>Brutto</strong></label>

                                <div class="input-group mb-2">

                                    <input type="text" class="form-control" id="norder_costt" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">zł</div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-lg-4">

                                <label for="norder_poa"><strong>Kwota pobranej zaliczki</strong></label>

                                <div class="input-group mb-2">

                                    <input type="text" class="form-control" id="norder_poa" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">.00 zł</div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto my-3">

                        <span class="text-muted"><strong>Sposób dostarczenia naprawy do serwisu</strong></span>

                        <div class="form-check mt-2">

                            <input class="form-check-input" type="radio" name="dostarczenie" id="norder_dlvr1" value="1"
                                checked>
                            <label class="form-check-label" for="norder_dlvr1">
                                Dostarczenie osobiste
                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="dostarczenie" id="norder_dlvr2"
                                value="2">
                            <label class="form-check-label" for="norder_dlvr2">
                                Wysyłka na adres serwisu
                            </label>

                        </div>

                        <div class="form-check mb-2">

                            <input class="form-check-input" type="radio" name="dostarczenie" id="norder_dlvr3"
                                value="3">
                            <label class="form-check-label" for="norder_dlvr3">
                                Odbiór przez serwisanta ze wskazanego adresu
                            </label>

                        </div>

                        <span class="text-muted"><strong>Sposób odbioru ukończonej naprawy</strong></span>

                        <div class="form-check mt-2">

                            <input class="form-check-input" type="radio" name="odbior" id="norder_pick1" value="1"
                                checked>
                            <label class="form-check-label" for="norder_pick1">
                                Odbiór osobisty
                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="odbior" id="norder_pick2" value="2">
                            <label class="form-check-label" for="norder_pick2">
                                Wysyłka na adres klienta
                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="odbior" id="norder_pick3" value="3">
                            <label class="form-check-label" for="norder_pick3">
                                Doręczenie przez serwisanta przez wskazany adres
                            </label>

                        </div>

                    </div>

                </div>

            </div>



            <div class="col-md-6">

                <div class="card">

                    <div class="col-auto my-3">

                        <div class="form-group">
                            <label for="norder_desprob"><strong>Opis problemu</strong></label>
                            <textarea class="form-control" id="norder_desprob" name="opis" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="norder_descom"><strong>Uwagi</strong></label>
                            <textarea class="form-control" id="norder_descom" name="opis" rows="4"></textarea>
                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto my-3">

                        <div class="form-group1">

                            <label for="norder_group1"><strong>Grupa</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-users" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <select class="form-control" id="norder_group1" name="grupa">
                                    <option>1</option>
                                </select>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto my-3">

                        <div class="form-group">

                            <label for="norder_group2"><strong>Przypisany pracownik</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <select class="form-control" id="norder_group2" name="grupa">
                                    <option>1</option>
                                </select>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto my-1">

                        <div class="form-group p-3">

							<div class="row">

                                <label for="norder_client"><strong>Klient</strong></label>

								<div class="input-group">

									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i>
										</div>
									</div>
                                    
									<input type="text" class="form-control" id="norder_client" placeholder="">
                                    

								
                                </div>

                            </div>

                                <div class="d-flex justify-content-end">

                                    <button class="btn btn-primary active mt-1" id="submit">Wyszukaj</button>

                                </div>

                        </div>

                    </div>

                </div>



                <div class="d-flex justify-content-end">

                    <a href="/"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
                    <button class="btn btn-success m-1" id="add_order">Utwórz naprawe</button>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="js/neworder.js"></script>
@stop