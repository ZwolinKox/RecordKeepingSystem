
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')



    <style type="text/css">
    .prawa {
        text-align: right;
    }

    .fixed {
        min-height: 100px;
    }
    </style>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Historia</a>
            </li>

            <div class="form-inline ml-auto">
				<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle active" type="button" id="przykladowaListaPrimary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" />
                                <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" />
                            </svg>
                            Akcje naprawy
                        </button>

                        <div class="dropdown-menu" aria-labelledby="przykladowaListaPrimary">

                            <h6 class="dropdown-header">Operacje</h6>
                            <a class="dropdown-item" href="#">Zapisz wynikiem diagnozy</a>
                            <a class="dropdown-item" href="#">Zanotuj czynność naprawczą</a>
                            <a class="dropdown-item" href="#">Opisz naprawę podsumowaniem</a>
                            <hr>

                            <h6 class="dropdown-header">Inne operacje</h6>
                            <a class="dropdown-item" href="#">Dodaj notatkę</a>
                            <a class="dropdown-item" href="#">Załącz pliki</a>
                            <hr>

                            <h6 class="dropdown-header">Statusy naprawy</h6>
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
                            <svg class="bi bi-card-heading" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path fill-rule="evenodd" d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                            </svg>
                            Drukuj
                        </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-outline-secondary">
                            <svg class="bi bi-gear-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z" />
                            </svg>
                            Edytuj
                        </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                        </svg>
                        Zamknij
                    </button>
                
            </div>

        </ul>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Informacje o zleceniu
                        <svg class="bi bi-info-circle-fill float-right" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </div>
                    <table class="table table-bordered">
                        <tbody>

                            <tr>
                                <td class="prawa">Nazwa klienta</td>
                                <td class="blue" id="nazwa"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Utworzony przez</td>
                                <td id="utworzony"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Przypisany przez</td>
                                <td id="przypisany"></td>
                            </tr>
                            <tr>
                                <td class="prawa">RMA</td>
                                <td id="rma"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Rodzaj</td>
                                <td id="rodzaj"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Producent</td>
                                <td id="producent"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Model</td>
                                <td id="model"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Numer seryjny</td>
                                <td class="blue" id="numer"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Naprawa gwarancyjna</td>
                                <td id="gwarancja"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Uwagi wewnętrzne</td>
                                <td id="uwagi"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Sposób dostarczenia naprawy</td>
                                <td id="dostarczenie"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Sposób odbioru naprawy</td>
                                <td id="odbior"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        Informacje dodatkowe
                        <svg class="bi bi-info-circle-fill float-right" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </div>
                    <div class="col-auto  mt-3 mb-2">
                        <div class="form-group">
                            Treść informacji dodatkowych
                        </div>
                    </div>
                </div>
                <div class="card mt-3 mb-3">
                    <div class="card-header">
                        Załączone pliki
                        <svg class="bi bi-file-earmark-text float-right" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z" />
                            <path fill-rule="evenodd"
                                d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <div class="col-auto  mt-3 mb-2">
                        <div class="alert alert-success" role="alert">
                            <svg class="bi bi-info-circle-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            Dodaj więcej plików używając przycisku
                            <button class="btn btn-primary active">
                                <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" />
                                    <path fill-rule="evenodd"
                                        d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" />
                                </svg>
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
                        <svg class="bi bi-clock float-right" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z" />
                            <path fill-rule="evenodd"
                                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </div>
                    <table class="table table-bordered">
                        <tbody>

                            <tr>
                                <td class="prawa">Status</td>
                                <td>
                                    <span class="badge badge-warning">Warning</span>.
                                </td>
                            </tr>
                            <tr>
                                <td class="prawa">Postęp prac</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="prawa">Data utworzenia</td>
                                <td id="utworzenie"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Data rozpoczęcia</td>
                                <td id="rozpoczecie"></td>
                            </tr>
                            <tr>
                                <td class="prawa">Planowana data zkończenia</td>
                                <td>
                                    <span id="zakonczenie">
                                    </span>
                                    <span class="badge badge-pill badge-secondary">12</span>
                                    dni
                                </td>
                            </tr>
                            <tr>
                                <td class="prawa">Ilość dni od przyjęcia</td>
                                <td>
                                    <span class="badge badge-success">Success</span>dzień
                                </td>
                            </tr>
                            <tr>
                                <td class="prawa">Ilość dni pozostałych do zakończenia</td>
                                <td>
                                    <span class="badge badge-success">Success</span>dni
                                </td>
                            </tr>
                            <tr>
                                <td class="prawa">Sytuacja czasowa</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card border-success mt-3 mb-3">
                    <div class="card-header alert-success">
                        Problem
                        <svg class="bi bi-wrench float-right" width="1em" height="1em" viewBox="0 0 16 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z" />
                        </svg>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p><strong>Opis problemu:</strong></p>
                            <p id="problem">Treść</p>
                        </li>
                        <li class="list-group-item">
                            <div class="alert alert-success" role="alert">
                                <svg class="bi bi-info-circle-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                Brak diagnozy, użyj przycisku
                                <button class="btn btn-primary active">
                                    <svg class="bi bi-arrow-repeat" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z" />
                                        <path fill-rule="evenodd"
                                            d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z" />
                                    </svg>
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

@stop