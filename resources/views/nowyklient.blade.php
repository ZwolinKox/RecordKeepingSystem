<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

	<div class="container">
		<div>
			<div class="row">
				<div class="col-md-6">
					<div id="error">
						
					</div>
					<div class="card" >
						<div class="card-header dark">
							Dane klienta
						</div>
						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<div class="form-check form-check-inline col-5">
									<input class="form-check-input" type="checkbox" id="firma">
									<label class="form-check-label" for="firma">Firma</label>
								</div>
							</div>
							<div class="form-group">
								<label for="imienazwisko"><strong>Imię i nazwisko</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i></div>
									</div>
									<input type="text" class="form-control" id="imienazwisko" placeholder="">
								</div>
							</div>
							
					</div>
					</div>
					<div class="card mt-3 mb-3" >
						<div class="card-header">
							Preferencje klienta
						</div>
						<div class="col-auto  mt-3 mb-2">
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="emaileinformacyjne" value="option1">
									<label class="form-check-label" for="emaileinformacyjne">Wysyłaj emaile informacyjne</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="smsyinformacyjne" value="option2">
									<label class="form-check-label" for="smsyinformacyjne">Wysyłaj SMSy informacyjne</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card" >
						<div class="card-header">
							Telefon
						</div>
						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<label for="tel"><strong>Numer telefonu</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text">+48</div>
									</div>
									<input type="text" class="form-control" id="tel" placeholder="000-00-00-00">
								</div>
							</div>
							<div class="form-group">
								<label for="altertel"><strong>Alternatywny numer telefonu</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text">+48</div>
									</div>
									<input type="text" class="form-control" id="altertel" placeholder="000-00-00-00">
								</div>
							</div>
						</div>
					</div>
					<div class="card mt-3" >
						<div class="card-header">
							Internet
						</div>
						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<label for="email"><strong>Adres email</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div>
									<input type="text" class="form-control" id="email" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label for="alteremail"><strong>Alternatywny adres email</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div>
									<input type="text" class="form-control" id="alteremail" placeholder="">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group mt-3 ml-auto">
						<a href="/"><button type="button" class="btn btn-danger">Anuluj</button></a>
						<button id="createclient" class="btn btn-success">Utwórz klienta</button>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>

<script src="js\newclient.js"></script>
@stop
					