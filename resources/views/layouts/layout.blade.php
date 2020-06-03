<!doctype html>
<html lang="pl">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fontello.css">

    <title>System zleceń</title>

  </head>
    <body>

    <div class="w-100">

    <div class="p-3 header"> 
        System zleceń
    </div>

    </div>          

    <nav aria-label="breadcrumb" id="topbar">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="a_topbar"><i class="icon-home"></i>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
    </nav>

    <!-- To służy do rozszerzania szablonu  -->
    @yield('content')

    <!-- Biblioteka js do łatwego obsługiwania ciasteczek  -->
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>