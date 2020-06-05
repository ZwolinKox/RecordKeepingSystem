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

                <div class="dropdown">

                    <button class="btn btn-primary active list-button" type="button" id="addgroup">
                        <i class="icon-plus"></i>Dodaj grupę
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

                            <div class="col-3 text-center">Nazwa</div>
                            <div class="col-3 text-center">Ilość klientów</div>
                            <div class="col-3 text-center">Utworzona przez</div>
                            <div class="col-3 text-center">Akcje</div>

                        </div>
                    </div>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">

                            <div class="row">

                                 <div class="col-3 text-center">Stali klienci</div>
                                 <div class="col-3 text-center">82</div>
                                 <div class="col-3 text-center">Jan Kowalski</div>
                                 <div class="col-3 text-center">
                                    <button type="button" class="btn btn-danger">Usuń</button>
                                    <button type="button" class="btn btn-outline-secondary">Edytuj</button>
                                </div>

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