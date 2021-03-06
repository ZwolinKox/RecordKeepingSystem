<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<body>

    <div class="container-fluid">

        <div id="loading" class="loading text-center">

            <div class="display-4">Trwa ładowanie ustawień z serwera...</div>
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>

        </div>

        <div id="main" style="display: none;">
            <ul class="nav nav-tabs list-top-menu">

                <li class="nav-item top-menu">
                    <a class="nav-link active" href="#">Wszyscy</a>
                </li>


                <li class="nav-item dropdown top-menu">

                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Grupa</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="setAdmin(0)" href="#">Pracownicy</a>
                        <a class="dropdown-item" onclick="setAdmin(1)" href="#">Administratorzy</a>
                        <a class="dropdown-item" onclick="setAdmin(-1)" href="#">Wszyscy</a>
                    </div>

                </li>

                <div class="form-inline ml-auto top-menu">
                     <div class="form-group mx-sm-1">
                        <label for="lemp_search" class="sr-only">Wyszukaj</label>
                        <input type="text" class="form-control col-auto searchPattern" id="lemp_search"
                            placeholder="Wpisz szukaną fraze">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 active search">Wyszukaj</button>

                    <button class="btn btn-primary active list-button" type="button" id="addgroup"
                        onclick="window.location.href='/new_employee'">
                        <i class="icon-plus"></i>Dodaj pracownika
                    </button>

                </div>

            </ul>

            <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

            <div id="mySidenav-list" class="sidenav-list">

                <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>

                <div class="side_m_list_content">

                    <div class="form-group ml-1">

                        <div class="input-group mb-1" id="sb">

                            <input type="text" class="form-control col-auto searchPattern" id="lemp_msearch" placeholder="Wpisz szukaną fraze">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary mr-2 active search"><i class="icon-search"></i></button>
                            </div>

                        </div>

                    </div>

                    <a class="nav-link active" href="#">Wszyscy</a>

                    <div class="dropdown">

                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Grupa</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="setAdmin(0)" href="#">Pracownicy</a>
                            <a class="dropdown-item" onclick="setAdmin(1)" href="#">Administratorzy</a>
                            <a class="dropdown-item" onclick="setAdmin(-1)" href="#">Wszyscy</a>
                        </div>

                    </div>

                    <button class="btn btn-primary active side_m_list_button" type="button" id="addgroup"
                        onclick="window.location.href='/new_employee'">
                        <i class="icon-plus"></i>Dodaj pracownika
                    </button>
                </div>

            </div>

            <div class="row mt-3">

                <div class="col-auto m-auto">

                    <nav aria-label="Page navigation example ">

                        <ul class="pagination paginationBody">

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

                    <div class="card  list">

                        <table class="card-table table table-sm">

                            <thead class="thead-light">

                                <tr>

                                    <th class="td_style_list">Nazwa</th>
                                    <th class="td_style_list">Email</th>
                                    <th class="td_style_list">Admin</th>
                                    <th class="td_style_list">Akcja</th>

                                </tr>

                            </thead>

                            <tbody id="userTable">

                                

                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="w-100"></div>


                <div class="col-auto mt-3 mx-auto">

                    <nav aria-label="Page navigation example ">

                        <ul class="pagination paginationBody">

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

            <script src="js\side_menu.js"></script>
        </div>
    </div>

    <script src="js/listEmployee.js"></script>

    @stop