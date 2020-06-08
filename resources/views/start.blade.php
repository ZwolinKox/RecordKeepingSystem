
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


        <div class="container">

            <div class="row start_row">

                    <div class="col-md-4 start_col"> 
                        <div class="text-center">
                            <a href="new_client" class="a_start">
                                <p class="t_link"><i class="icon-user-add" style="font-size: 30px; margin-right: 20px;"></i>Dodaj klienta</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 start_col"> 
                        <div class="text-center">
                            <a href="list_groups" class="a_start">
                                <p class="t_link"><i class="icon-users" style="font-size: 30px; margin-right: 20px;"></i>Grupy klientow</p>
                            </a>
                        </div>
                    </div>
 
                    <div class="col-md-4 start_col"> 
                        <div class="text-center "> 
                            <a href="list_customers" class="a_start">
                                <p class="t_link"><i class="icon-users" style="font-size: 30px; margin-right: 20px;"></i>Lista klientow</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 start_col sep"> 
                        <div class="text-center ">
                            <a href="new_order" class="a_start">
                                <p class="t_link"><i class="icon-doc-add" style="font-size: 30px; margin-right: 20px;"></i>Dodaj zgłoszenie</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 start_col"> 
                        <div class="text-center ">
                            <a href="list_application" class="a_start">
                                <p class="t_link"><i class="icon-wpforms" style="font-size: 30px; margin-right: 20px;"></i>Lista zgłoszeń</p>
                            </a>
                        </div>
                    </div>
  
            </div>
    
        </div>

@stop
