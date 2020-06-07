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
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary active" onclick="window.location.href='/new_order'">
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