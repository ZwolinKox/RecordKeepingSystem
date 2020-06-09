<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

<div class="container-fluid">

    <div>

        <div class="row">

            <div class="col-md-6">

                <div class="card">

                    <div class="col-auto my-1">

                        <div class="form-group">

                            <label for="eorder_type"><strong>Typ przedmiotu naprawy</strong></label>

                            <div class="form-check">

                            <input class="form-check-input" type="radio" id="eorder_eotype" checked="checked" name="otype" value="option1">
                            <label class="form-check-label" for="eorder_eotype">Istniejący typ</label>

                            <div class="w-100"></div>
                        
                            <input class="form-check-input" type="radio" id="eorder_notype" name="otype" value="option1">
                            <label class="form-check-label" for="eorder_notype">Nowy typ</label>

                            <div class="row eotype">

                                <div class="form-group mx-3">

                                    <label for="eorder_eotypeo"><strong>Wybierz typ naprawy</strong></label>

                                    <div class="input-group mb-1">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><strong>*</strong></div>
                                        </div>

                                        <select class="form-control" id="eorder_eotypeo" name="typ">
                                            <option>1</option>
                                        </select>


                                    </div>


                                </div>      

                            </div>


                            <div class="row notype">

                                <div class="form-group mx-3">
                                    <label for="eorder_notypeo"><strong>Nowy typ naprawy</strong></label>

                                    <div class="input-group mb-1">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon-tag" style="font-size: 15px;"></i></div>     
                                        </div>
                                        <input type="text" class="form-control" id="eorder_notypeo" placeholder="">

                                    </div>

                                </div>

                            </div>

                        </div>

                        </div>

                        <div class="form-group">

                            <label for="eorder_mnfctr"><strong>Producent</strong></label>
                            <input type="text" class="form-control" id="eorder_mnfctr" name="producent" value="samsung" placeholder="">

                        </div>

                        <div class="form-group">

                            <label for="eorder_model"><strong>Model</strong></label>
                            <input type="text" class="form-control" id="eorder_model" name="model" value="example" placeholder="">

                        </div>

                        <div class="form-group">

                            <label for="eorder_serial"><strong>Numer seryjny</strong></label>

                            <div class="input-group mb-1">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-tag" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <input type="text" class="form-control" id="eorder_serial" value="XYZ" placeholder="">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="form-group col-auto my-3">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="eorder_def" checked="checked" name="wrrnt" value="option1">
                            <label class="form-check-label" for="eorder_wrrnt">Naprawa zwykła</label>

                            <div class="w-100"></div>
                        
                            <input class="form-check-input" type="radio" id="eorder_wrrnt" name="wrrnt" value="option1">
                            <label class="form-check-label" for="eorder_wrrnt">Naprawa gwarancyjna</label>


                            <div class="row wrrnt_child">

                                <div class="form-group col-lg-6 float-left">
                                    <label for="eorder_stwrrnt"><strong>Data zakupu</strong></label>
                                    <input type="date" class="form-control" id="eorder_stwrrnt" name="rozpczecie" placeholder="">
                                </div>

                                <div class="form-group col-lg-6 float-right">
                                    <label for="eorder_sewrrnt"><strong>Numer dokumentu zakupu</strong></label>
                                    <div class="input-group mb-1">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="icon-tag" style="font-size: 15px;"></i></div>     
                                        </div>
                                        <input type="text" class="form-control" id="eorder_sewrrnt" placeholder="">

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
                                <label for="eorder_in"><strong>Data rozpoczęcia naprawy</strong></label>
                                <input type="date" class="form-control" id="eorder_in" name="rozpczecie" placeholder="">
                            </div>

                            <div class="form-group col-lg-6 m-auto">
                                <label for="eorder_out"><strong>Data zakończenia naprawy</strong></label>
                                <input type="date" class="form-control" id="eorder_out" name="zakonczenie"
                                    placeholder="">
                            </div>

                        </div>

                        <div class="row">

                            <label class="mx-auto my-1 text-center"><strong>Szacowana cena naprawy, którą akceptuje
                                    klient w momencie przyjmowania naprawy</strong></label>

                            <div class="form-group col-lg-4">

                                <label for="eorder_cost"><strong>Netto</strong></label>

                                <div class="input-group mb-2">

                                    <input type="text" class="form-control" id="eorder_cost" value="200" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">zł</div>
                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-lg-4">

                                <label for="eorder_vat"><strong>Vat</strong></label>

                                <div class="input-group mb-2">

                                    <input type="number" class="form-control" id="eorder_vat" value="23" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">%</div>
                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-lg-4">

                                <label for="eorder_costt"><strong>Brutto</strong></label>

                                <div class="input-group mb-2">

                                    <input type="text" class="form-control" id="eorder_costt" value="256" placeholder="">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">zł</div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-lg-4">

                                <label for="eorder_poa"><strong>Kwota pobranej zaliczki</strong></label>

                                <div class="input-group mb-2">

                                    <input type="text" class="form-control" id="eorder_poa" value="100" placeholder="">

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

                            <input class="form-check-input" type="radio" name="dostarczenie" id="eorder_dlvr1"
                                checked>
                            <label class="form-check-label" for="eorder_dlvr1">
                                Dostarczenie osobiste
                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="dostarczenie" id="eorder_dlvr2"
                                value="2">
                            <label class="form-check-label" for="eorder_dlvr2">
                                Wysyłka na adres serwisu
                            </label>

                        </div>

                        <div class="form-check mb-2">

                            <input class="form-check-input" type="radio" name="dostarczenie" id="eorder_dlvr3"
                                value="3">
                            <label class="form-check-label" for="eorder_dlvr3">
                                Odbiór przez serwisanta ze wskazanego adresu
                            </label>

                        </div>

                        <span class="text-muted"><strong>Sposób odbioru ukończonej naprawy</strong></span>

                        <div class="form-check mt-2">

                            <input class="form-check-input" type="radio" name="odbior" id="eorder_pick1" value="1"
                                checked>
                            <label class="form-check-label" for="eorder_pick1">
                                Odbiór osobisty
                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="odbior" id="eorder_pick2" value="2">
                            <label class="form-check-label" for="eorder_pick2">
                                Wysyłka na adres klienta
                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="odbior" id="eorder_pick3" value="3">
                            <label class="form-check-label" for="eorder_pick3">
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
                            <label for="eorder_desprob"><strong>Opis problemu</strong></label>
                            <textarea class="form-control" id="eorder_desprob" name="opis" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="eorder_descom"><strong>Uwagi</strong></label>
                            <textarea class="form-control" id="eorder_descom" name="opis" rows="4"></textarea>
                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto my-3">

                        <div class="form-group1">

                            <label for="eorder_group1"><strong>Grupa</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-users" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <select class="form-control" id="eorder_group1" name="grupa">
                                    <option>1</option>
                                </select>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="col-auto my-3">

                        <div class="form-group">

                            <label for="eorder_group2"><strong>Przypisany pracownik</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <select class="form-control" id="eorder_group2" name="grupa">
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

                                <label for="eorder_client"><strong>Klient</strong></label>

								<div class="input-group">

									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i>
										</div>
									</div>

									<input type="text" class="form-control" id="eorder_client" value="janek" placeholder="">

								
                                </div>

                            </div>

                                <div class="d-flex justify-content-end">

                                    <button class="btn btn-primary active mt-1" id="submit">Wyszukaj</button>

                                </div>

                        </div>

                    </div>

                </div>



                <div class="d-flex justify-content-end">

                    <a href="order_info"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
                    <button class="btn btn-success m-1" id="submit">Utwórz naprawe</button>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="js/neworder.js"></script>
@stop