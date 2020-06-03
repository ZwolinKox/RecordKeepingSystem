
<!-- Tutaj definiujemy to, że używamy szablonu 'layout' -->
@extends('layouts\layout')

<!-- Ta część będzie wklejona ostatecznie w środek layoutu -->
@section('content')

    <div class="container">


        <div class="col-lg-9 mx-auto my-5 rounded border">

            <h3 class="mt-3">Edytuj plan numeracyjny</h3>
            <hr>

            <form class="p-4">

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Wzorzec:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control" id="pattern" placeholder="%N/I/%m/%Y">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Dokument:</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-control" name="document" id="document">
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Cykliczność:</label>
                    <div class="col-sm-10">
                        <select id="inputState" class="form-control" name="cyclicity" id="cyclicity">
                            <option selected value="week">tygodniowo</option>
                            <option value="month">miesięcznie</option>
                            <option value="year">rocznie</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-end">

                    <button type="submit" class="btn btn-primary ">Zapisz</button>

                </div>
            </form>

        </div>

    </div>

    @stop