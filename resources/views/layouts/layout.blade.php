<!doctype html>
<html lang="pl">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">

    <title>System zleceń</title>

  </head>

  <body>

  <div class="container-fluid flex-column" id="loadingContainer">
          <div class="row">
          <div class="col-12 text-center align-items-center ">
            <div class="spinner-border align-middle text-primary " style=" margin-top: 25%; width: 6rem; height: 6rem;" role="status"> </div>
          </div>
  </div>
  </div>

  <div id="pageContent" style="display: none;">
    <div class="container-fluid">

      <div class="row header p-3">

        <div class="col-md-8">

          <div class="header-t"> 
            System zleceń
          </div>

        </div>

        <div class="col-md-4 user" id="user_emb">

          <div class="d-flex justify-content-end">

            <div class="dropdown">

              <button class="btn btn-primary user_btn" id="drop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-user"></i>
                <span class="userName">
                  <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </span>
              </button>

              <div class="dropdown-menu d_menu" aria-labelledby="drop">

                <a class="dropdown-header text-muted font-weight-bold userType"></a>
                <a class="dropdown-item" href="/edit_my_acc">Ustawienia konta</a>
                <a class="dropdown-item admin" href="/list_employee">Zarządzaj użytkownikami</a>
                <a class="dropdown-item admin" href="/scheme">Schemat numeracji</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item logout" href="#">Wyloguj się</a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    

            

      <nav aria-label="breadcrumb" id="topbar">

        <ol class="breadcrumb">

            <li class="breadcrumb-item "><div class="side_m" onclick="openNav()">&#9776;</div></li>
            <li class="breadcrumb-item "><a href="/" class="a_topbar"><i class="icon-home"></i>Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>

        </ol>

      </nav>

      <div id="mySidenav" class="sidenav">
        
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
        <div class="user_btn">
          <div id="ubb">
            <i class="icon-user"></i>
            <span class="userName">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
            </span>
          </div>
        </div>

        <a class="dropdown-header text-muted font-weight-bold userType"></a>
        <a class="dropdown-item" href="/edit_my_acc">Ustawienia konta</a>
        <a class="dropdown-item admin" href="/list_employee">Zarządzaj użytkownikami</a>
        <a class="dropdown-item admin" href="/scheme">Schemat numeracji</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item logout" href="#">Wyloguj się</a>

      </div>

      <a href="#" class="scrollup"><i class="icon-up"></i></a>

      

      <!-- To służy do rozszerzania szablonu  -->
      
      @yield('content')
      </div>

      <!-- Biblioteka js do łatwego obsługiwania ciasteczek  -->
      <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

      <script src="{{ asset('js\side_menu.js') }}"></script>
      <script src="{{ asset('js\redirect.js') }}"></script>
      <script src="{{ asset('js\logout.js') }}"></script>
      <script src="{{ asset('js\userName.js') }}"></script>
      <script src="{{ asset('js\admin.js') }}"></script>
      <script src="{{ asset('js\scrollTop.js') }}"></script>

  </body>
</html>