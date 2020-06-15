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

            <div class="form-inline ml-auto top-menu">
                <div class="form-group mx-sm-1">
                        <label for="lgr_search" class="sr-only">Wyszukaj</label>
                        <input type="text" class="form-control col-auto searchPattern" id="lgr_search"
                            placeholder="Wpisz szukaną fraze">
                </div>
                <button type="submit" class="btn btn-primary mr-2 active search">Wyszukaj</button>

                <button type="button" class="btn btn-primary list-button" data-toggle="modal" data-target="#addGroup">
                    <i class="icon-plus"></i>Dodaj grupę
                </button>

                <div class="modal fade" id="addGroup" tabindex="-1" role="dialog" aria-labelledby="addGroupLabel" aria-hidden="true">

                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header">

                                <h5 class="modal-title" id="addGroupLabel">Dodaj grupę</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>

                            <div class="modal-body">

                                <div id="GroupAddLogs"></div>

                                <input type="text" class="form-control mt-2 w-100" placeholder="Wprowadź nazwę grupy" id="addGroupinp">

                            </div>

                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                <button id="saveNewGroup" type="button" class="btn btn-primary" onclick="addGroup()" >Zapisz</button>
                                                        
                            </div>
                                                    
                        </div>

                    </div>

                </div>

            </div>

        </ul>


        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>

            <div class="side_m_list_content">

                <div class="form-group ml-1">

                    <div class="input-group mb-1 sb">

                        <input type="text" class="form-control col-auto searchPattern" id="lgr_msearch" placeholder="Wpisz szukaną fraze">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary mr-2 active search"><i class="icon-search"></i></button>
                        </div>

                    </div>

                </div>

                <a class="nav-link active" style="margin-bottom: 10px;" href="#">Lista</a>

                <div class="form-group ml-1">

                    <div class="input-group mb-1 sb">

                        <input type="text" class="form-control col-auto" id="addSideGroup" placeholder="nowa grupa">

                        <div class="input-group-append">
                            <button type="button" class="btn btn-outline-secondary mr-2 active" onclick="addSideGroup()">
                                <i class="icon-plus"></i>
                            </button>
                        </div>

                    </div>

                </div>

            

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

                <div class="card list">

                    <table class="card-table table table-sm">

                        <thead class="thead-light">

                            <tr>

                                <th class="td_style_list">Nazwa</th>
                                <th class="td_style_list">Ilość klientów</th>
                                <th class="td_style_list">Akcja</th>

                            </tr>

                        </thead>

                        <tbody id="groupTable">

                            


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

    <script src="js/listGroups.js"></script>

    @stop