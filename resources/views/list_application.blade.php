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
                    <button type="button" class="btn btn-primary active">
                        <svg class="bi bi-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd"
                                d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                        </svg>
                    </button>
                    <button type="button" class="btn btn-primary active">
                        <svg class="bi bi-filter" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
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

                            <div class="col-2">Pozostały czas</div>
                            <div class="col-2">Numer zlecenia</div>
                            <div class="col-3">Klient</div>
                            <div class="col-3">Sprzęt</div>
                            <div class="col-2">Status</div>

                        </div>
                    </div>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">

                            <div class="row">

                                 <div class="col-2">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">X5S2</div>
                                <div class="col-3">Dominik Kopiec</div>
                                <div class="col-3">
                                    Laptop Samsung
                                    <br>
                                    <span class="text-secondary">Model</span>
                                </div>
                                <div class="col-2"><span class="badge badge-warning">Warning</span>.</div>
                                

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