<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<div class="container-fluid">
    <ul class="nav nav-tabs list-top-menu">
        <li class="nav-item">
            <a class="nav-link active" href="#">Informacje</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="order_history">Historia</a>
        </li>

        <div class="form-inline ml-auto">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle active" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-arrows-cw"></i>
                    Akcje naprawy
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                    <a class="dropdown-item" href="#">Zapisz wynikiem diagnozy</a>
                    <a class="dropdown-item" href="#">Zanotuj czynność naprawczą</a>
                    <a class="dropdown-item" href="#">Opisz naprawę podsumowaniem</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-header text-muted font-weight-bold">Inne operacje</a>
                    <a class="dropdown-item" href="#">Dodaj notatkę</a>
                    <a class="dropdown-item" href="#">Załącz pliki</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                    <a class="dropdown-item" href="#">Oczekuje na dostarczenie</a>
                    <a class="dropdown-item" href="#">W trakcie diagnozy</a>
                    <a class="dropdown-item" href="#">Wymaga potwierdzeia kosztów u klienta</a>
                    <a class="dropdown-item" href="#">Potwierdzone</a>
                    <a class="dropdown-item" href="#">W trakcie naprawy</a>
                    <a class="dropdown-item" href="#">Oczekuje na podzespoły</a>
                    <a class="dropdown-item" href="#">W trakcie testów</a>
                    <a class="dropdown-item" href="#">Podsumowanie naprawy</a>
                    <a class="dropdown-item" href="#">Nie zaakceptowane</a>
                    <a class="dropdown-item" href="#">Anulowane</a>
                    <a class="dropdown-item" href="#">Naprawa nie jest możliwa</a>
                    <a class="dropdown-item" href="#">Do odbioru</a>
                    <a class="dropdown-item" href="#">Przekazano do wysyłki</a>
                    <a class="dropdown-item" href="#">Odebrane</a>
                    <a class="dropdown-item" href="#">Zezłomowane</a>

                </div>
            </div>


            <div class="btn-group ml-2">
                <button type="button" class="btn btn-outline-secondary">
                    <i class="icon-print"></i>Drukuj
                </button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Rozwiń listę</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Pierwszy link</a>
                    <a class="dropdown-item" href="#">Drugi link</a>
                    <a class="dropdown-item" href="#">Trzeci link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Czwarty link</a>
                </div>
            </div>

            <button type="button" class="btn btn-outline-secondary ml-2">
                <i class="icon-edit"></i>
                Edytuj
            </button>

            <button type="button" class="btn btn-outline-secondary ml-2">
                <i class="icon-cancel-circled"></i>
                Usuń
            </button>


            <button type="button" class="btn btn-outline-secondary ml-2">
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
            <a class="nav-link" href="order_history">Historia</a>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle active side_m_list_button" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-arrows-cw"></i>Akcje naprawy
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                    <a class="dropdown-item" href="#">Zapisz wynikiem diagnozy</a>
                    <a class="dropdown-item" href="#">Zanotuj czynność naprawczą</a>
                    <a class="dropdown-item" href="#">Opisz naprawę podsumowaniem</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-header text-muted font-weight-bold">Inne operacje</a>
                    <a class="dropdown-item" href="#">Dodaj notatkę</a>
                    <a class="dropdown-item" href="#">Załącz pliki</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                    <a class="dropdown-item" href="#">Oczekuje na dostarczenie</a>
                    <a class="dropdown-item" href="#">W trakcie diagnozy</a>
                    <a class="dropdown-item" href="#">Wymaga potwierdzeia kosztów u klienta</a>
                    <a class="dropdown-item" href="#">Potwierdzone</a>
                    <a class="dropdown-item" href="#">W trakcie naprawy</a>
                    <a class="dropdown-item" href="#">Oczekuje na podzespoły</a>
                    <a class="dropdown-item" href="#">W trakcie testów</a>
                    <a class="dropdown-item" href="#">Podsumowanie naprawy</a>
                    <a class="dropdown-item" href="#">Nie zaakceptowane</a>
                    <a class="dropdown-item" href="#">Anulowane</a>
                    <a class="dropdown-item" href="#">Naprawa nie jest możliwa</a>
                    <a class="dropdown-item" href="#">Do odbioru</a>
                    <a class="dropdown-item" href="#">Przekazano do wysyłki</a>
                    <a class="dropdown-item" href="#">Odebrane</a>
                    <a class="dropdown-item" href="#">Zezłomowane</a>

                </div>
            </div>

            <div class="dropdown">
                <button type="button"
                    class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split side_m_list_button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-print"></i>Drukuj
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Pierwszy link</a>
                    <a class="dropdown-item" href="#">Drugi link</a>
                    <a class="dropdown-item" href="#">Trzeci link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Czwarty link</a>
                </div>
            </div>

            <button type="button" class="btn btn-outline-secondary side_m_list_button">
                <i class="icon-edit"></i>Edytuj
            </button>

            <button type="button" class="btn btn-outline-secondary side_m_list_button">
                <i class="icon-cancel-circled"></i>Usuń
            </button>


            <button type="button" class="btn btn-outline-secondary side_m_list_button">
                <i class="icon-ok-circled"></i>Zamknij
            </button>

        </div>

    </div>

    <div class="row">
        <div class="col-md-9 mx-auto">

            <div class="card list">
                <!--
                <div class="card-header">

                    <div class="row">

                        <div class="col-3 text-center">Autor</div>
                        <div class="col-2 text-center">Data</div>
                        <div class="col-7 text-center">Notatka</div>

                    </div>
                </div>

                <ul class="list-group list-group-flush">

                    <li class="list-group-item">

                        <div class="row">

                            <div class="col-3 text-center">Andrzej Kowalski</div>
                            <div class="col-2 text-center">05.06.2020</div>
                            <div class="col-7 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>

                        </div>

                    </li>

                </ul>
                -->
                <table class="card-table table table-sm">

                    <thead class="thead-light">

                        <tr>
                            <th class="td_style_list">Autor</th>
                            <th class="td_style_list">Data</th>
                            <th class="td_style_list">Notatka</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td class="td_style_list">Andrzej Kowalski</td>
                            <td class="td_style_list">05.06.2020</td>
                            <td class="td_style_list">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>

                        </tr>
                        <tr>

                            <td class="td_style_list">Andrzej Kowalski</td>
                            <td class="td_style_list">05.06.2020</td>
                            <td class="td_style_list">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>

                        </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>


</div>




@stop