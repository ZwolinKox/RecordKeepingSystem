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
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
    </nav>

    <!-- To służy do rozszerzania szablonu  -->

    
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    
  </body>
</html>