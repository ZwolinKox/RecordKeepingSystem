
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

    <div class="container-fluid">
        <ul class="nav nav-tabs list-top-menu">

            <li class="nav-item">
                <a class="nav-link active client_info"  href="#">Informacje</a>
            </li>

            <li class="nav-item">
                <a class="nav-link client_application" href="#" >Zgłoszenia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link client_notes" href="#">Notatki</a>
            </li>

            <li class="nav-item">
                <a class="nav-link client_history" href="#">Historia zmian</a>
            </li>

            <div class="form-inline ml-auto">
                
                    <button type="button" class="btn btn-outline-secondary ml-2" onclick="window.location.href='/edit_client'">
                        <i class="icon-edit"></i>
                        Edytuj
                    </button>

                    <button type="button" class="btn btn-outline-secondary ml-2">
                        <i class="icon-cancel-circled"></i>
                        Usuń
                    </button>

                    <button type="button" class="btn btn-outline-secondary ml-2"> 
                        <i class="icon-ok-circled"></i>
                        Zamknij
                    </button>
                
            </div>

        </ul>

        <div class="side_m_list" onclick="openNav_list()"><i class="icon-plus"></i></div>

        <div id="mySidenav-list" class="sidenav-list">
            
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav_list()">&times;</a>
            
            <div class="side_m_list_content">

                <a class="nav-link active" class="#">Informacje</a>
                <a class="nav-link client_application" href="#" >Zgłoszenia</a>
                <a class="nav-link client_notes" href="#">Notatki</a>
                <a class="nav-link client_history" href="#">Historia zmian</a>


                <button type="button" class="btn btn-outline-secondary side_m_list_button" onclick="window.location.href='/edit_client'">
                    <i class="icon-edit"></i>Edytuj    
                </button>

                <button type="button" class="btn btn-outline-secondary side_m_list_button">
                    <i class="icon-cancel-circled"></i>Usuń 
                </button>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="card">

                    <div class="card-header"> Informacje </div>

                    <table class="card-table table-bordered">

                        <tbody>

                            <tr>
                                <td class="td_style">Imię i Nazwisko</td>
                                <td class="blue" id="cust_name"></td>
                            </tr>

                            <tr>
                                <td class="td_style">Typ klienta</td>
                                <td id="cust_type"></td>
                            </tr>

                            <tr>
                                <td class="td_style">Identyfikator</td>
                                <td id="cust_id"></td>
                            </tr>

                            <tr>
                                <td class="td_style">Grupy</td>
                                <td id="cust_group"></td>
                            </tr>
                            
                            <tr>
                                <td class="td_style">Data utworzenia</td>
                                <td id="cust_creation_date"></td>
                            </tr>

                            <tr>
                                <td class="td_style">Data edycji</td>
                                <td id="cust_edition_date"></td>
                            </tr>

                        </tbody>

                    </table>

                </div>

           

            
                <div class="card">

                    <div class="card-header">Zgody
                        
                        <i class="icon-handshake-o float-right"></i>

                    </div>

                    <table class="card-table table-bordered">

                        <tbody>

                            <tr>
                                <td class="td_style">Regulamin serwisu</td>
                                <td class="cust_servreg text-center" style="width: 45px;" id="nazwa"><i class="icon-check-1"></i></td>
                            </tr>

                            <tr>
                                <td class="td_style">Informacje o podmiocie przetwarzającym dane w celu realizacji usługi</td>
                                <td id="cust_dataprocessing" class="text-center" style="width: 45px;"><i class="icon-check-1"></i></td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            

            
                <div class="card">

                    <div class="card-header">Dodatkowe informacje

                        <i class="icon-info-circled float-right"></i>

                    </div>

                    <div class="col-auto  mt-3 mb-2">
                        <div class="alert alert-primary" role="alert">
                            Brak zdefiniowanych tresci dodatkowych.
                        </div>

                    </div>

                </div>
            


            
                <div class="card">

                    <div class="card-header">Preferencje
                        
                        <i class="icon-cog float-right"></i>

                    </div>

                    <table class="card-table table-bordered">

                        <tbody>

                            <tr>
                                <td class="td_style">Otrzymuje wiadomości e-mail?</td>
                                <td class="blue text-center" style="width: 45px;" id="cust_email"><i class="icon-check-1"></i></td>
                            </tr>

                            <tr>
                                <td class="td_style">Otrzymuje wiadomości sms?</td>
                                <td class="text-center" style="width: 45px;" id="cust_sms"><i class="icon-check-1"></i></td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            

            </div>

            <div class="col-md-6">

            
                <div class="card">

                    <div class="card-header">Kontakt</div>
                    

                    <table class="card-table table-bordered">

                        <tbody>

                            <tr>
                                <td class="td_style">Numery telefonu</td>
                                <td class="blue" id="cust_telnum"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Emaile</td>
                                <td class="blue" id="cust_emails"></td>
                            </tr>
                            <tr>
                                <td class="td_style">Adres zamieszkania</td>
                                <td class="blue" id="cust_address"></td>
                            </tr>

                        </tbody>

                    </table>

                </div>
            

            
                <div class="card">

                    <div class="card-header">Dodatkowe informacje</div>
                    

                    <div class="col-auto  mt-3 mb-2">

                        <div class="alert alert-primary" role="alert">
                            Brak zdefiniowanych adresów przejdź do edycji aby dodać jakiś.
                        </div>

                    </div>

                </div>
        

            </div>

        </div>

    </div>

    <script src="{{ asset('js\clientNavs.js') }}"></script>
    <script src="{{ asset('js\clientInfo.js') }}"></script>

@stop