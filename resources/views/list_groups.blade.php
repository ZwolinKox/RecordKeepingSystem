<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<body>

    <div class="container-fluid">
        

        <ul class="nav nav-tabs list-top-menu">

            <li class="nav-item top-menu">
                <a class="nav-link active" href="#">Lista</a>
            </li>

            <div class="form-inline ml-auto top-menu">

                    <button class="btn btn-primary active list-button" type="button" id="addgroup">
                        <i class="icon-plus"></i>Dodaj grupę
                    </button>

            </div>

        </ul>


        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>
            
            <div class="side_m_list_content">

                <a class="nav-link active" style="margin-bottom: 10px;" href="#">Lista</a>

                <button class="btn btn-primary side-m-list-button" type="button" id="addgroup">
                    <i class="icon-plus"></i>Dodaj grupę
                </button>


            </div>

        </div>

        <div class="row mt-3">

            <div class="col-auto m-auto">

                <nav aria-label="Page navigation example ">

                    <ul class="pagination">

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

            <div class="w-100"></div>
   
            <div class="col-md-9 mx-auto">

                <div class="card list">

                    <table class="card-table table-bordered">

                        <thead>

                            <tr>

                                <th class="td_style_list">Nazwa</th>
                                <th class="td_style_list">Ilość klientów</th>
                                <th class="td_style_list">Utworzona przez</th>
                                <th class="td_style_list">Akcja</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td class="td_style_list">Grupa 1</td>
                                <td class="td_style_list">--</td>
                                <td class="td_style_list">Pracownik 1</td>
                                <td class="td_style_list">

                                    <button type="button" class="btn btn-danger list-button">Usuń</button>
                                    <button type="button" class="btn btn-outline-secondary list-button">Edytuj</button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

            <div class="w-100"></div>

         
            <div class="col-auto mt-3 ml-auto mr-auto">

                <nav aria-label="Page navigation example ">

                    <ul class="pagination">

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

    </div>

    @stop