<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<div class="container-fluid">
<div id="successDelete" style="display: none;" class="text-center">
        <div class="row">
            <div class="col"><div class="display-4">Pomyślnie usunięto zamówienie</div></div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col"><a href="/"><button type="button" class="btn btn-secondary m-1">Powrót do menu</button></a>
            <button onclick="location.href='/list_application'" class="btn btn-secondary m-1">Przejdź do listy zamówień</button></div>
        </div>
        
    </div>
    <span id="main">

        <div class="modal fade" id="uploadFile" tabindex="-1" role="dialog" aria-labelledby="uploadFileLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadFileLabel">Załączenie pliku</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div id="fileLogs"></div>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Wybierz plik</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                            <button id="sendFile" type="button" class="btn btn-primary">Wyślij</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

        <ul class="nav nav-tabs list-top-menu">
            <li class="nav-item">
                <a class="nav-link order_history" href="#">Informacje</a>
            </li>
            <li class="nav-item">
                <a class="nav-link order_history" href="#">Historia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Notatki</a>
            </li>

            <div class="form-inline ml-auto">
				<div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-arrows-cw"></i>
                        Akcje naprawy
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                

                        <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                        <a class="dropdown-item cursor-pointer">Dodaj notatkę</a>
                        <a class="dropdown-item cursor-pointer" data-toggle="modal" data-target="#uploadFile">Załącz pliki</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="1" >Oczekuje na dostarczenie</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="2" >W trakcie diagnozy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="3">Wymaga potwierdzeia kosztów u klienta</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="4">Potwierdzone</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="5">W trakcie naprawy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="6">Oczekuje na podzespoły</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="7">W trakcie testów</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="8">Podsumowanie naprawy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="9">Nie zaakceptowane</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="10">Anulowane</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="11">Naprawa nie jest możliwa</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="12">Do odbioru</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="13">Przekazano do wysyłki</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="14">Odebrane</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="15">Zezłomowane</a>

                    </div>
                </div>


                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="icon-print"></i>Drukuj 
                        </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Rozwiń listę</span>
                        </button>
                        

                    <button type="button" class="btn btn-outline-secondary ml-2 editOrder">
                        <i class="icon-edit"></i>
                        Edytuj
                    </button>

                    <button type="button" class="btn btn-outline-secondary ml-2 deleteOrder">
                        <i class="icon-cancel-circled"></i>
                        Usuń
                    </button>


                    <button type="button" class="btn btn-outline-secondary ml-2 closeOrder">
                        <i class="icon-ok-circled"></i>
                        Zamknij
                    </button>
                
            </div>

        </ul>



        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>
            
            <div class="side_m_list_content">

                <a class="nav-link active" href="#">Informacje</a>
                <a class="nav-link" href="/order_history">Historia</a>
                <a class="nav-link" href="/order_notes">Notatki</a>

                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle active side_m_list_button" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-arrows-cw"></i>Akcje naprawy
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                        <a class="dropdown-item cursor-pointer" >Dodaj notatkę</a>
                        <a class="dropdown-item cursor-pointer" data-toggle="modal" data-target="#uploadFile">Załącz pliki</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="1">Oczekuje na dostarczenie</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="2">W trakcie diagnozy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="3">Wymaga potwierdzeia kosztów u klienta</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="4">Potwierdzone</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="5">W trakcie naprawy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="6">Oczekuje na podzespoły</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="7">W trakcie testów</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="8">Podsumowanie naprawy</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="9">Nie zaakceptowane</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="10">Anulowane</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="11">Naprawa nie jest możliwa</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="12">Do odbioru</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="13">Przekazano do wysyłki</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="14">Odebrane</a>
                        <a class="dropdown-item setStatus cursor-pointer" id="15">Zezłomowane</a>

                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split side_m_list_button printOrder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-print"></i>Drukuj 
                    </button>
                </div>

                <button type="button" class="btn btn-outline-secondary side_m_list_button editOrder">
                    <i class="icon-edit"></i>Edytuj    
                </button>

                <button type="button" class="btn btn-outline-secondary side_m_list_button deleteOrder">
                    <i class="icon-cancel-circled"></i>Usuń 
                </button>


                <button type="button" class="btn btn-outline-secondary side_m_list_button closeOrder">
                    <i class="icon-ok-circled"></i>Zamknij    
                </button>

            </div>

        </div>


    <div class="row">
        <div class="col-md-9 mx-auto">

            <div class="card list">
                
                <table class="card-table table table-sm">

                    <thead class="thead-light">

                        <tr>
                            <th class="td_style_list">Autor</th>
                            <th class="td_style_list">Data</th>
                            <th class="td_style_list">Notatka</th>
                        </tr>

                    </thead>

                    <tbody id="tableBody">
                        <tr>

                            <td class="td_style_list">Andrzej Kowalski</td>
                            <td class="td_style_list">05.06.2020</td>
                            <td class="td_style_list">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>

                        </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>
    </span>

</div>


    <script src="{{ asset('js\orderNavs.js') }}"></script>
    <script src="{{ asset('js\orderNotes.js') }}"></script>

@stop