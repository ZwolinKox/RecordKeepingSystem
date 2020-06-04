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
            
            <li class="nav-item top-menu">
                <a class="nav-link" href="#">Z otwartymi naprawami</a>
            </li>

            <li class="nav-item dropdown top-menu">

                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grupa</a>
                    
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>

            </li>

            <div class="form-inline ml-auto top-menu">

                <div class="dropdown">

                    <button class="btn btn-primary dropdown-toggle active list-button" type="button" id="dodajklienta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-plus"></i>Dodaj klienta
                    </button>

                    <div class="dropdown-menu" style="margin-right: 120px;" aria-labelledby="dodajklienta">
                        <h6 class="dropdown-header">Operacje</h6>
                        <a class="dropdown-item" href="#">Zapisz wynikiem diagnozy</a>
                        <a class="dropdown-item" href="#">Zanotuj czynność naprawczą</a>
                        <a class="dropdown-item" href="#">Opisz naprawę podsumowaniem</a>
                    </div>

                </div>

            </div>

        </ul>

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

                    <div class="card-header">

                        <div class="row"> 

                            <div class="col-4 text-center">Nazwa</div>
                            <div class="col-4 text-center">Numer telefonu</div>
                            <div class="col-4 text-center">Email
                                <div class="dropdown float-right">

                                    <button class="btn list-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-up" style="margin-right: -10px;"></i><i class="icon-down"></i> 
                                    </button>

                                    <div class="dropdown-menu" style="margin-right: 70px;" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">option</a>
                                        <a class="dropdown-item" href="#">option</a>
                                        <a class="dropdown-item" href="#">option</a>
                                    </div>

                                </div>

                            </div>

                           <!-- <div class="col-3 text-center">
   
                                <div class="dropdown d-flex justify-content-end">

                                    <button class="btn list-button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-up" style="margin-right: -10px;"></i><i class="icon-down"></i> 
                                    </button>

                                    <div class="dropdown-menu" style="margin-right: 70px;" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">option</a>
                                        <a class="dropdown-item" href="#">option</a>
                                        <a class="dropdown-item" href="#">option</a>
                                    </div>

                                </div>

                            </div> -->

                        </div>
                    </div>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">

                            <div class="row">

                                <div class="col-4 text-center">User</div>
                                <div class="col-4 text-center">+48 000 000 000</div>
                                <div class="col-4 text-center">email@example.com</div>

                               <!-- <div class="col-3 text-center">

                                    <div class="dropdown d-flex justify-content-end">

                                        <button class="btn btn-outline-secondary dropdown-toggle list-button" type="button" id="details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Szczegóły</button>
                                                
                                        <div class="dropdown-menu" aria-labelledby="details">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>

                                    </div>

                                </div>-->

                            </div>

                        </li>

                    </ul>

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