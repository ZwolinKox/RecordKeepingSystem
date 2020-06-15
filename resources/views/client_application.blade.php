<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


<div class="container-fluid">
    
    <ul class="nav nav-tabs list-top-menu">

            <li class="nav-item">
                <a class="nav-link client_info"  href="#">Informacje</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active client_application" href="#" >Zgłoszenia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link client_notes" href="#">Notatki</a>
            </li>

            <div class="form-inline ml-auto">
                
                    <button type="button" class="btn btn-outline-secondary ml-2 editUser">
                        <i class="icon-edit"></i>
                        Edytuj
                    </button>

                    <button type="button" class="btn btn-outline-secondary ml-2 deleteUser">
                        <i class="icon-cancel-circled"></i>
                        Usuń
                    </button>
                
            </div>

        </ul>

        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>
            
            <div class="side_m_list_content">

                <a class="nav-link client_info" class="#">Informacje</a>
                <a class="nav-link active" href="#" >Zgłoszenia</a>
                <a class="nav-link client_notes" href="#">Notatki</a>


                <button type="button" class="btn btn-outline-secondary side_m_list_button editUser">
                    <i class="icon-edit"></i>Edytuj    
                </button>

                <button type="button" class="btn btn-outline-secondary side_m_list_button deleteUser">
                    <i class="icon-cancel-circled"></i>Usuń 
                </button>

            </div>

        </div>


    <div class="row">
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

                    <tbody id="applicationTable">

                    </tbody>

                </table>

            </div>

        </div>
    </div>


</div>

<script src="{{ asset('js\clientNavs.js') }}"></script>
<script src="{{ asset('js\clientApplication.js') }}"></script>



@stop