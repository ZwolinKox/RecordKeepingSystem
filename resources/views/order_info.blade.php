
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


    <div class="container-fluid">
        <ul class="nav nav-tabs list-top-menu">
            <li class="nav-item">
                <a class="nav-link active" href="#">Informacje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link order_history" href="#">Historia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link order_notes" href="#">Notatki</a>
            </li>

            <div class="form-inline ml-auto">
				<div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-arrows-cw"></i>
                        Akcje naprawy
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                

                        <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                        <a class="dropdown-item" href="#">Dodaj notatkę</a>
                        <a class="dropdown-item" href="#">Załącz pliki</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                        <a class="dropdown-item" class="setStatus" id="1" href="#">Oczekuje na dostarczenie</a>
                        <a class="dropdown-item" class="setStatus" id="2" href="#">W trakcie diagnozy</a>
                        <a class="dropdown-item" class="setStatus" id="3" href="#">Wymaga potwierdzeia kosztów u klienta</a>
                        <a class="dropdown-item" class="setStatus" id="4" href="#">Potwierdzone</a>
                        <a class="dropdown-item" class="setStatus" id="5" href="#">W trakcie naprawy</a>
                        <a class="dropdown-item" class="setStatus" id="6" href="#">Oczekuje na podzespoły</a>
                        <a class="dropdown-item" class="setStatus" id="7" href="#">W trakcie testów</a>
                        <a class="dropdown-item" class="setStatus" id="8" href="#">Podsumowanie naprawy</a>
                        <a class="dropdown-item" class="setStatus" id="9" href="#">Nie zaakceptowane</a>
                        <a class="dropdown-item" class="setStatus" id="10" href="#">Anulowane</a>
                        <a class="dropdown-item" class="setStatus" id="11" href="#">Naprawa nie jest możliwa</a>
                        <a class="dropdown-item" class="setStatus" id="12" href="#">Do odbioru</a>
                        <a class="dropdown-item" class="setStatus" id="13" href="#">Przekazano do wysyłki</a>
                        <a class="dropdown-item" class="setStatus" id="14" href="#">Odebrane</a>
                        <a class="dropdown-item" class="setStatus" id="15" href="#">Zezłomowane</a>

                    </div>
                </div>


                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="icon-print"></i>Drukuj 
                        </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Rozwiń listę</span>
                        </button>
                        

                    <button type="button" class="btn btn-outline-secondary ml-2 editOrder">
                        <i class="icon-edit"></i>
                        Edytuj
                    </button>

                    <button type="button" class="btn btn-outline-secondary ml-2 deleteOrder">
                        <i class="icon-cancel-circled"></i>
                        Usuń
                    </button>


                    <button type="button" class="btn btn-outline-secondary ml-2 closeOrder">
                        <i class="icon-ok-circled"></i>
                        Zamknij
                    </button>
                
            </div>

        </ul>



        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>
            
            <div class="side_m_list_content">

                <a class="nav-link active" href="#">Informacje</a>
                <a class="nav-link" href="/order_history">Historia</a>
                <a class="nav-link" href="/order_notes">Notatki</a>

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle active side_m_list_button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-arrows-cw"></i>Akcje naprawy
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                        <a class="dropdown-item" href="#">Dodaj notatkę</a>
                        <a class="dropdown-item" href="#">Załącz pliki</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                        <a class="dropdown-item" class="setStatus" id="1" href="#">Oczekuje na dostarczenie</a>
                        <a class="dropdown-item" class="setStatus" id="2" href="#">W trakcie diagnozy</a>
                        <a class="dropdown-item" class="setStatus" id="3" href="#">Wymaga potwierdzeia kosztów u klienta</a>
                        <a class="dropdown-item" class="setStatus" id="4" href="#">Potwierdzone</a>
                        <a class="dropdown-item" class="setStatus" id="5" href="#">W trakcie naprawy</a>
                        <a class="dropdown-item" class="setStatus" id="6" href="#">Oczekuje na podzespoły</a>
                        <a class="dropdown-item" class="setStatus" id="7" href="#">W trakcie testów</a>
                        <a class="dropdown-item" class="setStatus" id="8" href="#">Podsumowanie naprawy</a>
                        <a class="dropdown-item" class="setStatus" id="9" href="#">Nie zaakceptowane</a>
                        <a class="dropdown-item" class="setStatus" id="10" href="#">Anulowane</a>
                        <a class="dropdown-item" class="setStatus" id="11" href="#">Naprawa nie jest możliwa</a>
                        <a class="dropdown-item" class="setStatus" id="12" href="#">Do odbioru</a>
                        <a class="dropdown-item" class="setStatus" id="13" href="#">Przekazano do wysyłki</a>
                        <a class="dropdown-item" class="setStatus" id="14" href="#">Odebrane</a>
                        <a class="dropdown-item" class="setStatus" id="15" href="#">Zezłomowane</a>

                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split side_m_list_button printOrder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-print"></i>Drukuj 
                    </button>
                </div>

                <button type="button" class="btn btn-outline-secondary side_m_list_button editOrder">
                    <i class="icon-edit"></i>Edytuj    
                </button>

                <button type="button" class="btn btn-outline-secondary side_m_list_button deleteOrder">
                    <i class="icon-cancel-circled"></i>Usuń 
                </button>


                <button type="button" class="btn btn-outline-secondary side_m_list_button closeOrder">
                    <i class="icon-ok-circled"></i>Zamknij    
                </button>

            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Informacje o zleceniu
                        <i class="icon-info-circled float-right"></i>
                    </div>
                    <table class="card-table table-bordered">
                        <tbody>
                            <tr>
                                <td class="td_style">Numer zlecenia</td>
                                <td id="order_number"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Id klienta</td>
                                <td id="order_custid"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Przedmiot naprawy</td>
                                <td id="order_type"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Utworzony przez</td>
                                <td id="order_creator"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Przypisany pracownik</td>
                                <td id="order_empl"></td>
                            </tr>
                            <tr>
                                <td class="td_style">RMA</td>
                                <td id="order_rma"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Producent</td>
                                <td id="order_mnfctr"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Model</td>
                                <td id="order_model"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Numer seryjny</td>
                                <td id="order_nr"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Naprawa gwarancyjna</td>
                                <td id="order_wrrnt">--</td>
                            </tr>
                            <tr>
                                <td class="td_style">Data zakupu</td>
                                <td id="order_buy_date">--</td>
                            </tr>
                            <tr>
                                <td class="td_style">Numer dokumentu zakupu</td>
                                <td id="order_wrrnt_number">--</td>
                            </tr>
                            <tr>
                                <td class="td_style">Sposób dostarczenia naprawy</td>
                                <td id="order_in"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Sposób odbioru naprawy</td>
                                <td id="order_out"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Szacowana cena naprawy</td>
                                <td id="order_price"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Pobrana zaliczka</td>
                                <td id="order_advance"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="card">

                    <div class="card-header">
                        Informacje dodatkowe
                        <i class="icon-info-circled float-right"></i>
                    </div>

                    <div class="col-auto  mt-3 mb-2">
                        <div class="alert alert-primary" id="order_info" role="alert">
                            Brak zdefiniowanych tresci dodatkowych.
                        </div>
                    </div>

                </div>
                
                <div class="card">

                    <div class="card-header">
                        Załączone pliki
                        <i class="icon-doc float-right"></i>
                    </div>

                    <div class="col-auto  mt-3 mb-2">

                        <div class="alert alert-success" role="alert">

                            <i class="icon-info-circled"></i>Dodaj więcej plików używając przycisku
                            
                            <button class="btn btn-primary" disabled>
                                <i class="icon-arrows-cw"></i>
                                Akcje naprawy
                            </button>

                        </div>

                    </div>

                </div>

            </div>
            
            <div class="col-md-6">

                <div class="card">

                    <div class="card-header">
                        Stan naprawy
                        <i class="icon-clock float-right"></i>
                    </div>

                    <table class="card-table table-bordered">

                        <tbody>

                            <tr>
                                <td class="td_style">Status</td>
                                <td>
                                    <span class="badge badge-warning" id="order_status">-</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="td_style">Postęp prac</td>
                                <td id="order_progres">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="td_style">Data rozpoczęcia</td>
                                <td id="order_date_begin"></td>
                            </tr>

                            <tr>
                                <td class="td_style">Planowana data zkończenia</td>
                                <td>
                                    
                                    <span class="badge badge-pill badge-secondary" id="order_date_end">-</span>
                                    dni
                                </td>
                            </tr>

                            <tr>
                                <td class="td_style">Ilość dni od przyjęcia</td>
                                <td>
                                    <span class="badge badge-success">- dni</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="td_style">Ilość dni pozostałych do zakończenia</td>
                                <td>
                                    <span class="badge badge-success">- dni</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="td_style">Sytuacja czasowa</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="00"
                                            aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <div class="card border-success">

                    <div class="card-header alert-success">
                        Problem
                        <i class="icon-wrench float-right"></i>
                    </div>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <p><strong>Opis problemu:</strong></p>
                            <p id="oinfo_problem">Treść</p>
                        </li>
                        

                        <li class="list-group-item">

                            <div class="alert alert-success" role="alert">

                                <i class="icon-info-circled"></i>Brak diagnozy, użyj przycisku

                                <button class="btn btn-primary" disabled>
                                    <i class="icon-arrows-cw"></i>
                                    Akcje naprawy
                                </button>

                                aby opisać tę naprawę diagnozą
                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('js\orderNavs.js') }}"></script>
    <script src="{{ asset('js\orderInfo.js') }}"></script>

@stop