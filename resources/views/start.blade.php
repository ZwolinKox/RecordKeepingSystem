
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


        <div class="container">

            <div class="row">

                    <div class="col-md-4 mt-5"> 
                        <div class="text-center pt-5 pb-5 rounded option">
                            <a href="nowyklient" class="a1">
                                <i class="icon-user-add" style="font-size: 30px; margin-right: 20px;"></i>Dodaj klienta
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5"> 
                        <div class="text-center pt-5 pb-5 rounded option"> 
                            <i class="icon-users" style="font-size: 30px; margin-right: 20px;"></i>Grupy klientow
                        </div>
                    </div>

                    <div class="col-md-4 mt-5"> 
                        <div class="text-center pt-5 pb-5 rounded option"> 
                            <i class="icon-users" style="font-size: 30px; margin-right: 20px;"></i>Lista klientow
                        </div>
                    </div>

                    <div class="col-md-6 mt-5"> 
                        <div class="text-center pt-5 pb-5 rounded option">
                            <i class="icon-doc-add" style="font-size: 30px; margin-right: 20px;"></i>dodaj zgłoszenie
                        </div>
                    </div>

                    <div class="col-md-6 mt-5"> 
                        <div class="text-center pt-5 pb-5 rounded option">
                            <i class="icon-wpforms" style="font-size: 30px; margin-right: 20px;"></i>Lista zgłoszeń
                        </div>
                    </div>
  
            </div>
    
        </div>

@stop
