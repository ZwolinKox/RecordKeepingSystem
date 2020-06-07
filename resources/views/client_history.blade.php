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
            <a class="nav-link" href="client_application">Zgłoszenia</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="client_notes">Notatki</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="#">Historia zmian</a>
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
            <a class="nav-link" href="client_application">Zgłoszenia</a>
            <a class="nav-link" href="client_notes">Notatki</a>
            <a class="nav-link active" href="#">Historia zmian</a>

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
            <!--    STARE
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Data</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kamil Kowalski</td>
                        <td>06.05.2020</td>
                        <td><span class="badge badge-warning">Warning</span></td>                    
                    </tr>
                </tbody>
            </table> -->
            <div class="card list">

                <table class="card-table table table-sm">

                    <thead class="thead-light">

                        <tr>

                            <th class="td_style_list">#</th>
                            <th class="td_style_list">Autor</th>
                            <th class="td_style_list">Data</th>
                            <th class="td_style_list">Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td class="td_style_list">1</td>
                            <td class="td_style_list">Kamil Kowalski</td>
                            <td class="td_style_list">05.06.2020</td>
                            <td class="td_style_list"><span class="badge badge-warning">Warning</span></td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </div>


</div>




@stop