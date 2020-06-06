<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<body>

    <div class="container-fluid">
        

        <ul class="nav nav-tabs list-top-menu">

            <li class="nav-item top-menu">
                <a class="nav-link active" href="#">Wszyscy</a>
            </li>
            

            <li class="nav-item dropdown top-menu">

                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupa</a>
                    
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Pracownicy</a>
                    <a class="dropdown-item" href="#">Administratorzy</a>
                </div>

            </li>

            <div class="form-inline ml-auto top-menu">

                    <button class="btn btn-primary active list-button" type="button" id="addgroup" onclick="window.location.href='/new_employee'">
                        <i class="icon-plus"></i>Dodaj pracownika
                    </button>

            </div>

        </ul>

        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>
            
            <div class="side_m_list_content">

                <a class="nav-link active" href="#">Wszyscy</a>
                
                <div class="dropdown">

                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupa</a>
                        
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Pracownicy</a>
                        <a class="dropdown-item" href="#">Administratorzy</a>
                    </div>

                </div>

                <button class="btn btn-primary active side_m_list_button" type="button" id="addgroup" onclick="window.location.href='/new_employee'">
                    <i class="icon-plus"></i>Dodaj pracownika
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

                <div class="card  list">

                    <table class="card-table table-bordered">

                        <thead>

                            <tr>

                                <th class="td_style_list">Nazwa</th>
                                <th class="td_style_list">Email</th>
                                <th class="td_style_list">Status</th>
                                <th class="td_style_list">Akcja</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td class="td_style_list">Imie_pracownika</td>
                                <td class="td_style_list">email_pracownika</td>
                                <td class="td_style_list">status_pracownika</td>
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

         
            <div class="col-auto mt-3 mx-auto">

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

        <script src="js\side_menu.js"></script>

    </div>

    @stop