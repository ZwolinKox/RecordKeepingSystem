<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<div class="container-fluid">
    <ul class="nav nav-tabs list-top-menu">
        <li class="nav-item">
            <a class="nav-link" href="order_info">Informacje</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Historia</a>
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

            <a class="nav-link" href="order_info">Informacje</a>
            <a class="nav-link active" href="#">Historia</a>

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