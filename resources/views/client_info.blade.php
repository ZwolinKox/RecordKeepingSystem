
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


    <div class="container-fluid">
        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a class="nav-link active" href="#">Informacje</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Zgłoszenia</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Notatki</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Historia zmian</a>
            </li>

            <div class="form-inline ml-auto">
				<div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-arrows-cw"></i>
                        Akcje klienta
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a class="dropdown-header text-muted font-weight-bold">Operacje</a>
                        <a class="dropdown-item" href="#">Zapisz wynikiem diagnozy</a>
                        <a class="dropdown-item" href="#">Zanotuj czynność naprawczą</a>
                        <a class="dropdown-item" href="#">Opisz naprawę podsumowaniem</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-header text-muted font-weight-bold">Inne operacje</a>
                        <a class="dropdown-item" href="#">Dodaj notatkę</a>
                        <a class="dropdown-item" href="#">Załącz pliki</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-header text-muted font-weight-bold">Statusy naprawy</a>
                        <a class="dropdown-item" href="#">Oczekuje na dostarczenie</a>
                        <a class="dropdown-item" href="#">W trakcie diagnozy</a>
                        <a class="dropdown-item" href="#">Wymaga potwierdzeia kosztów u klienta</a>
                        <a class="dropdown-item" href="#">Potwierdzone</a>
                        <a class="dropdown-item" href="#">W trakcie naprawy</a>
                        <a class="dropdown-item" href="#">Oczekuje na podzespoły</a>
                        <a class="dropdown-item" href="#">W trakcie testów</a>
                        <a class="dropdown-item" href="#">Podsumowanie naprawy</a>
                        <a class="dropdown-item" href="#">Nie zaakceptowane</a>
                        <a class="dropdown-item" href="#">Anulowane</a>
                        <a class="dropdown-item" href="#">Naprawa nie jest możliwa</a>
                        <a class="dropdown-item" href="#">Do odbioru</a>
                        <a class="dropdown-item" href="#">Przekazano do wysyłki</a>
                        <a class="dropdown-item" href="#">Odebrane</a>
                        <a class="dropdown-item" href="#">Zezłomowane</a>

                    </div>
                    
                </div>


                    <div class="btn-group ml-2">
                        <button type="button" class="btn btn-outline-secondary">
                            <i class="icon-print"></i>
                            Drukuj
                        </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Rozwiń listę</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Pierwszy link</a>
                            <a class="dropdown-item" href="#">Drugi link</a>
                            <a class="dropdown-item" href="#">Trzeci link</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Czwarty link</a>
                        </div>
                    </div>



                    <button type="button" class="btn btn-outline-secondary ml-2">
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
                                <td class="td_style">Grupa</td>
                                <td id="cust_group"></td>
                            </tr>

                            <tr>
                                <td class="td_style">Utworzony przez</td>
                                <td id="cust_creator"></td>
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
                                <td class="td_style">Numer telefon</td>
                                <td class="blue" id="cust_telnum">+48 123 456 789</td>
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




@stop