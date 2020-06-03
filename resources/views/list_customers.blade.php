<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<body>

    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Wszyscy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Z otwartymi naprawami</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Grupa</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>

            <div class="form-inline ml-auto">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle active" type="button" id="dodajklienta"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="bi bi-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd"
                                d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                        </svg>
                        Dodaj klienta
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dodajklienta">
                        <h6 class="dropdown-header">Operacje</h6>
                        <a class="dropdown-item" href="#">Zapisz wynikiem diagnozy</a>
                        <a class="dropdown-item" href="#">Zanotuj czynność naprawczą</a>
                        <a class="dropdown-item" href="#">Opisz naprawę podsumowaniem</a>
                        <hr>
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
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">Nazwa</div>
                            <div class="col-md-2">Numer telefonu</div>
                            <div class="col-md-4">Email</div>
                            <div class="col-md-2">
                                <button class="btn dropdown-toggle float-right" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="bi bi-arrow-down-up" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11 3.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z" />
                                        <path fill-rule="evenodd"
                                            d="M10.646 2.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L11 3.707 8.354 6.354a.5.5 0 1 1-.708-.708l3-3zm-9 7a.5.5 0 0 1 .708 0L5 12.293l2.646-2.647a.5.5 0 1 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z" />
                                        <path fill-rule="evenodd"
                                            d="M5 2.5a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0V3a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">Dominik Kopiec</div>
                                <div class="col-md-2">+48 505 505 050</div>
                                <div class="col-md-4">email@gmail.com</div>
                                <div class="col-md-2">
                                    <div class="dropdown float-right">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            id="details" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Szczegóły
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="details">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>




            </div>
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