<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<div class="container-fluid">
    <ul class="nav nav-tabs">

        <li class="nav-item">
            <a class="nav-link" href="#">Informacje</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="#">Zgłoszenia</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Notatki</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Historia zmian</a>
        </li>

        <div class="form-inline ml-auto">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle active" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-arrows-cw"></i>
                    Akcje klienta
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
                    <i class="icon-print"></i>
                    Drukuj
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

    <div class="row">
        <div class="col-md-9 mx-auto">

            <div class="card list">

                <div class="card-header">

                    <div class="row">

                        <div class="col-2 text-center">Pozostały czas</div>
                        <div class="col-2 text-center">Numer zlecenia</div>
                        <div class="col-3 text-center">Klient</div>
                        <div class="col-3 text-center">Sprzęt</div>
                        <div class="col-2 text-center">Status</div>

                    </div>
                </div>

                <ul class="list-group list-group-flush">

                    <li class="list-group-item">

                        <div class="row">

                            <div class="col-2 text-center">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 text-center">X5S2</div>
                            <div class="col-3 text-center">Dominik Kopiec</div>
                            <div class="col-3 text-center">
                                Laptop Samsung
                                <br>
                                <span class="text-secondary">Model</span>
                            </div>
                            <div class="col-2 text-center"><span class="badge badge-warning">Warning</span>.</div>

                        </div>

                    </li>

                </ul>

            </div>

        </div>
    </div>


</div>




@stop