<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')


	<div class="container-fluid">

	<div id="loading" class="loading text-center">
            <div class="display-4">Trwa ładowanie ustawień z serwera...</div>
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            </div>
    </div>

	<div id="logs"></div>

		<div id="main" style="display:none;">

			<div class="row">

				<div class="col-md-6">
					<div id="error"></div>

					<div class="card">

						<div class="card-header dark">Dane klienta</div>

						<div class="col-auto my-3">

							<div class="form-group">

								<div class="form-check col-5">

									<input class="form-check-input" type="checkbox" id="eclient_fac">
									<label class="form-check-label" for="eclient_fac">Firma</label>

								</div>

                        	</div>

							<div class="form-group">

								<label for="eclient_name"><strong>Imię i nazwisko</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i></div>
									</div>

									<input type="text" class="form-control" id="eclient_name" value="" placeholder="">

								</div>

							</div>

							<div class="form-group">

                            <label for="eclient_group"><strong>Grupy</strong></label>

							<div class="input-group mb-2">

                                <select class="form-control" id="eclient_addgroup">
									

								</select>

								<div class="w-100"></div>

								<div class="w-100 d-flex justify-content-end">
								
									<button id="eclient_addGroupButton" class="btn btn-primary m-1 btn">Dodaj grupe</button>

								</div>

							</div>
							
							<div class="input-group mb-2">

                                <select class="form-control" id="eclient_deleteGroup">
									

								</select>

								<div class="w-100"></div>

								<div class="w-100 d-flex justify-content-end">
								
									<button id="eclient_deleteGroupButton" class="btn btn-primary m-1 btn">Usun grupe</button>

								</div>

                            </div>

                        </div>
							
						</div>

					</div>

					<div class="card">

						<div class="card-header">Preferencje klienta</div>
							
						<div class="col-auto  my-3">

							<div class="form-group">

								<div class="form-check">
									<input class="form-check-input"  checked="checked" type="checkbox" id="eclient_email">
									<label class="form-check-label" for="eclient_email">Wysyłaj emaile informacyjne</label>
								</div>

								<div class="form-check">
									<input class="form-check-input"  checked="checked" type="checkbox" id="eclient_sms">
									<label class="form-check-label" for="eclient_sms">Wysyłaj SMSy informacyjne</label>
								</div>

							</div>

						</div>

					</div>

				</div>



				<div class="col-md-6">

					<div class="card">

						<div class="card-header">Telefon</div>
							
						<div class="col-auto my-3">

							<div class="form-group">

								<label for="eclient_tnum"><strong>Numer telefonu</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text">+48</div>
									</div>

									<input type="text" class="form-control" id="eclient_tnum" placeholder="">

								</div>

							</div>

							<div class="form-group">

								<label for="eclient_atnum"><strong>Alternatywny numer telefonu</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text">+48</div>
									</div>

									<input type="text" class="form-control" id="eclient_atnum" placeholder="">

								</div>

							</div>

						</div>

					</div>

					<div class="card">

						<div class="card-header">Internet</div>
						
						<div class="col-auto my-3">

							<div class="form-group">

								<label for="eclient_dea"><strong>Adres email</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div>

									<input type="text" class="form-control" id="eclient_dea" placeholder="">

								</div>

							</div>

							<div class="form-group">

								<label for="eclient_aea"><strong>Alternatywny adres email</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div>

									<input type="text" class="form-control" id="eclient_aea" placeholder="">

								</div>

							</div>

						</div>

					</div>

					<div class="d-flex justify-content-end">

						<a href="/client_info"><button type="button" class="btn btn-danger m-1">Anuluj</button></a>
						<button id="eclient_sbutton" class="btn btn-success m-1">Zapisz zmiany</button>

					</div>

				</div>

			</div>

		</div>

	</div>

<script src="{{ asset('js\editClient.js') }}"></script>
@stop
					