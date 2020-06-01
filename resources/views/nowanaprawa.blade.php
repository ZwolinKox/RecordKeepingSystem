
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

	<div class="container">

		<form>

			<div class="row">

				<div class="col-md-6">

					<div class="card">

						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<label for="typ"><strong>Typ przedmiotu naprawy</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><strong>*</strong></div>
									</div>
									<select class="form-control" id="typ" name="typ">
										<option>1</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="producent"><strong>Producent</strong></label>
								<input type="text" class="form-control" id="producent" name="producent" placeholder="">
							</div>
							<div class="form-group">
								<label for="model"><strong>Model</strong></label>
								<input type="text" class="form-control" id="model" name="model" placeholder="">
							</div>
							<div class="form-group">
								<label for="nrseryjny"><strong>Numer seryjny</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-tag" style="font-size: 15px;"></i></div>
									</div>
									<input type="text" class="form-control" id="nrseryjny" placeholder="">
								</div>
							</div>
						</div>

					</div>
					<div class="card mt-3 mb-3">
						<div class="form-group col-auto mt-3 mb-3">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="naprawagwarancyjna" value="option1">
								<label class="form-check-label" for="naprawagwarancyjna">Naprawa gwarancyjna</label>
							</div>
						</div>	
					</div>
					<div class="card mt-3 mb-3">
						<div class="col-auto mt-3 mb-3">
							<div class="row">
								<div class="form-group col-auto m-auto">
										<label for="rozpczecie"><strong>Data rozpoczęcia naprawy</strong></label>
										<input type="date" class="form-control" id="rozpczecie" name="rozpczecie" placeholder="">
								</div>
								<div class="form-group col-auto m-auto">
										<label for="zakonczenie"><strong>Data zakończenia naprawy</strong></label>
										<input type="date" class="form-control" id="zakonczenie" name="zakonczenie" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
									<label for="cena"><strong>Szacowana cena naprawy, którą akceptuje klient w momencie przyjmowania naprawy<br>Brutto</strong></label>
									<div class="input-group mb-2">
										<input type="text" class="form-control col-2" id="cena" placeholder="">
										<div class="input-group-prepend">
											<div class="input-group-text">zł</div>
										</div>
									</div>
							</div>
							<div class="form-group">
									<label for="zaliczka"><strong>Kwota pobranej zaliczki</strong></label>
									<div class="input-group mb-2">
										<input type="text" class="form-control col-2" id="zaliczka" placeholder="">
										<div class="input-group-prepend">
											<div class="input-group-text">.00 zł</div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="card mt-3 mb-3">
						<div class="col-auto mt-3 mb-3">
							Sposób dostarczenia naprawy do serwisu
							<div class="form-check">
								<input class="form-check-input" type="radio" name="dostarczenie" id="dostarczenie" value="1" checked>
								<label class="form-check-label" for="dostarczenie">
									Dostarczenie osobiste
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="dostarczenie" id="dostarczenie" value="2" >
								<label class="form-check-label" for="dostarczenie">
									Wysyłka na adres serwisu
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="dostarczenie" id="dostarczenie" value="3" >
								<label class="form-check-label" for="dostarczenie">
									Odbiór przez serwisanta ze wskazanego adresu
								</label>
							</div>
							Sposób odbioru ukończonej naprawy
							<div class="form-check">
								<input class="form-check-input" type="radio" name="odbior" id="odbior" value="1" checked>
								<label class="form-check-label" for="odbior">
									Odbiór osobisty
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="odbior" id="odbior" value="2">
								<label class="form-check-label" for="odbior">
									Wysyłka na adres klienta
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="odbior" id="odbior" value="3">
								<label class="form-check-label" for="odbior">
									Doręczenie przez serwisanta przez wskazany adres
								</label>
							</div>

						</div>	
					</div>

				</div>


				
				<div class="col-md-6">
					<div class="card">
						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<label for="opis"><strong>Opis problemu</strong></label>
								<textarea class="form-control" id="opis" name="opis" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label for="opis"><strong>Uwagi</strong></label>
								<textarea class="form-control" id="opis" name="opis" rows="4"></textarea>
							</div>
						</div>	
					</div>
					<div class="card mt-3 mb-3">
						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<label for="grupa"><strong>Grupa</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i></div>
									</div>
									<select class="form-control" id="grupa" name="grupa">
										<option>1</option>
									</select>
								</div>
							</div>
						</div>	
					</div>
					<div class="card mt-3 mb-3">
						<div class="col-auto mt-3 mb-3">
							<div class="form-group">
								<label for="grupa"><strong>Przypisany pracownik</strong></label>
								<div class="input-group mb-2">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-user" style="font-size: 15px;"></i></div>
									</div>
									<select class="form-control" id="grupa" name="grupa">
										<option>1</option>
									</select>
								</div>
							</div>
						</div>	
					</div>
					<div class="form-group mt-3 ml-auto">
						<a href="/"><button type="button" class="btn btn-danger">Anuluj</button></a>
						<button class="btn btn-success" id="submit">Utwórz naprawe</button>
						</select>
					</div>
				</div>
			</div>
		</form>
	</div>
<script src="js/neworder.js"></script>
@stop
