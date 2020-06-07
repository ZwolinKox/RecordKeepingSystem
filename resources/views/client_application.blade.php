<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<div class="container-fluid">
    <ul class="nav nav-tabs list-top-menu">

        <li class="nav-item">
            <a class="nav-link" href="client_info">Informacje</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="#">Zgłoszenia</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="client_notes">Notatki</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="client_history">Historia zmian</a>
        </li>

        <div class="form-inline ml-auto">

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

        </div>

    </ul>

    <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

    <div id="mySidenav-list" class="sidenav-list">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>

        <div class="side_m_list_content">

            <a class="nav-link" href="client_info">Informacje</a>
            <a class="nav-link active" href="#">Zgłoszenia</a>
            <a class="nav-link" href="client_notes">Notatki</a>
            <a class="nav-link" href="client_history">Historia zmian</a>

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

        </div>

    </div>

    <div class="row">
        <div class="col-md-9 mx-auto">
            <!-- STARE
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

            </div> -->
            <div class="card list">

                <table class="card-table table table-sm">

                    <thead class="thead-light">

                        <tr>
                            <th class="td_style_list">Numer zlecenia</th>
                            <th class="td_style_list">Klient</th>
                            <th class="td_style_list">Sprzęt</th>
                            <th class="td_style_list">Pozostały czas</th>
                            <th class="td_style_list">Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td class="td_style_list"><a href="order_info" class="link-list-info">X5S2</a></td>
                            <td class="td_style_list">Customer 1</td>
                            <td class="td_style_list">Laptop Samsung</td>
                            <td class="td_style_list">

                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>

                            </td>
                            <td class="td_style_list"><span class="badge badge-warning">Warning</span></td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </div>


</div>




@stop