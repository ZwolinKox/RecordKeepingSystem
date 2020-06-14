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
                    <a class="nav-link active" href="#">Lista</a>
                </li>

                <li class="nav-item top-menu">
                    <a class="nav-link" href="#">Otwarte</a>
                </li>

                <li class="nav-item top-menu">
                    <a class="nav-link" href="#">Do odbioru</a>
                </li>

                <li class="nav-item top-menu">
                    <a class="nav-link" href="#">Moje</a>
                </li>


                <div class="form-inline ml-auto top-menu">
                    <div class="form-group mx-sm-1">
                        <label for="lapp_search" class="sr-only">Wyszukaj</label>
                        <input type="text" class="form-control col-auto searchPattern" id="lapp_search"
                            placeholder="Wpisz szukaną fraze">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 activ search">Wyszukaj</button>

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary active"
                            onclick="window.location.href='/new_order'">
                            <i class="icon-plus"></i>
                        </button>
                        <button type="button" class="btn btn-primary active">
                            <i class="icon-article"></i>
                        </button>
                    </div>
                </div>

            </ul>


            <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

            <div id="mySidenav-list" class="sidenav-list">

                <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>

                <div class="side_m_list_content">

                    <div class="form-group ml-1">

                        <div class="input-group mb-1" id="sb">

                            <input type="text" class="form-control col-auto searchPattern" id="lapp_msearch" placeholder="Wpisz szukaną fraze">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary mr-2 active search"><i class="icon-search"></i></button>
                            </div>

                        </div>

                    </div>

                    <a class="nav-link active" href="#">Lista</a>
                    <a class="nav-link" href="#">Otwarte</a>
                    <a class="nav-link" href="#">Do odbioru</a>
                    <a class="nav-link" href="#">Moje</a>

                    <button type="button" class="btn btn-primary active side_m_list_button"
                        onclick="window.location.href='/new_order'">
                        <i class="icon-plus"></i> Dodaj zgłoszenie
                    </button>

                    <button type="button" class="btn btn-primary active side_m_list_button">
                        <i class="icon-article"></i> Sortuj
                    </button>

                </div>

            </div>

            <div class="row mt-3">

                <div class="alert alert-info alert-dismissible fade show mx-auto mb-3 list text-center col-md-6"
                    role="alert">
                    Aby przejść do wszystkich informacji kliknij wybrany numer zlecenia
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

                <div class="w-100"></div>

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

                    <div class="card list">

                        <table class="card-table table table-sm">

                            <thead class="thead-light">
                                <!-- SPECJALNIE ZAMIENIŁEM KOLEJNOŚĆ !!!!!!!!!!!!!!!!!! -->
                                <tr>
                                    <th class="td_style_list">Numer zlecenia</th>
                                    <th class="td_style_list">Klient</th>
                                    <th class="td_style_list">Sprzęt</th>
                                    <th class="td_style_list">Pozostały czas</th>
                                    <th class="td_style_list">Status</th>

                                </tr>

                            </thead>

                            <tbody id="applicationTable">



                            </tbody>

                        </table>

                    </div>

                </div>

                <div class="w-100"></div>


                <div class="col-auto mt-3 ml-auto mr-auto">

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

        </div>

    </div>

    <script src="js/listApplication.js"></script>

    @stop