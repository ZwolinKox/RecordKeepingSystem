<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts.layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

	<div class="container-fluid">

		<div>

			<div class="row">

				<div class="col-md-6">
					<div id="error"></div>

					<div class="card">

						<div class="card-header dark">Dane klienta</div>

						<div class="col-auto my-3">

							<div class="form-group">

								<div class="form-check col-5">
									<input class="form-check-input" checked="checked" type="radio" name="eclient_radio" id="eclient_def">
									<label class="form-check-label" for="eclient_def">Osoba prywatna</label>
                                    <div class="w-100"></div>
                                    <input class="form-check-input" type="radio" name="eclient_radio" id="eclient_fac">
									<label class="form-check-label" for="eclient_fac">Firma</label>
								</div>

							</div>

							<div class="form-group">

								<label for="eclient_name"><strong>Imię i nazwisko</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i></div>
									</div>

									<input type="text" class="form-control" id="eclient_name" value="poprzednia nazwa" placeholder="">

								</div>

							</div>

							<div class="form-group">

                            <label for="eclient_group"><strong>Grupa</strong></label>

                            <div class="input-group mb-2">

                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-users" style="font-size: 15px;"></i>
                                    </div>
                                </div>

                                <select class="form-control" id="eclient_group">
                                    <option>Brak grupy</option>
                                </select>

                            </div>

                        </div>
							
						</div>

					</div>

					<div class="card">

						<div class="card-header">Preferencje klienta</div>
							
						<div class="col-auto  my-3">

							<div class="form-group">

								<div class="form-check">
									<input class="form-check-input"  checked="checked" type="checkbox" id="eclient_email" value="option1">
									<label class="form-check-label" for="eclient_email">Wysyłaj emaile informacyjne</label>
								</div>

								<div class="form-check">
									<input class="form-check-input"  checked="checked" type="checkbox" id="eclient_sms" value="option2">
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

									<input type="text" class="form-control" id="eclient_tnum" value="000 000 000" placeholder="">

								</div>

							</div>

							<div class="form-group">

								<label for="eclient_atnum"><strong>Alternatywny numer telefonu</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text">+48</div>
									</div>

									<input type="text" class="form-control" id="eclient_atnum" value="000 000 000" placeholder="">

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

									<input type="text" class="form-control" id="eclient_dea" value="defaultemailaddress@example.com" placeholder="">

								</div>

							</div>

							<div class="form-group">

								<label for="eclient_aea"><strong>Alternatywny adres email</strong></label>

								<div class="input-group mb-2">

									<div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div>

									<input type="text" class="form-control" id="eclient_aea" value="alteremailaddress@example.com" placeholder="">

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

<script src="js\newclient.js"></script>
@stop
					