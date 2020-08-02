<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Strona główna</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn btn-black dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Struktura IILO
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dyrekcja</a>
                            <a class="dropdown-item" href="#">Nauczyciele</a>
                            <a class="dropdown-item" href="#">Pedagog/psycholog</a>
                            <a class="dropdown-item" href="#">Administracja</a>
                            <a class="dropdown-item" href="#">RODO</a>
                            <a class="dropdown-item" href="#">Samorząd uczniowski</a>
                            <a class="dropdown-item" href="#">Rada rodziców</a>
                            <a class="dropdown-item" href="#">Dokumenty szkolne</a>
                            <a class="dropdown-item" href="#">PSO zachowania</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn btn-black dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Liceum
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profile klas</a>
                            <a class="dropdown-item" href="#">Konkursy i olimpiady</a>
                            <a class="dropdown-item" href="#">Osiągnięcia sportowe</a>
                            <a class="dropdown-item" href="#">Atuty</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn btn-black dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sekcja dwujęzyczna
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Informacje</a>
                            <a class="dropdown-item" href="#">Wymiana</a>
                            <a class="dropdown-item" href="#">Version française</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn btn-black dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kontakt
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Adres</a>
                            <a class="dropdown-item" href="#">Dojazd</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{route('admin.index')}}" class="dropdown-item">Zarządzanie stroną</a>
                        </div>
                    </div>
                </li>

                @if(\Illuminate\Support\Facades\Auth::check())

                    <div class="dropdown">
                        <a class="btn btn-black dropdown-toggle nav-link" href="{{route('admin.index')}}" role="button" id="sdf" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Zarządzanie stroną
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('admin.index')}}">Panel sterowania</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">Wyloguj się</a>

                        </div>
                    </div>

                @endif

            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">



            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Szukaj</h5>
                <div class="card-body">
                    <input type="text" name="search-posts" id="search-posts" class="form-control" placeholder="Szukana fraza">
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Menu dodatkowe</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Szkoła pamięta</a>
                                </li>
                                <li>
                                    <a href="#">Po lekcjach</a>
                                </li>
                                <li>
                                    <a href="#">Rekrutacja</a>
                                </li>
                                <li>
                                    <a href="#">Szkolna galeria</a>
                                </li>
                                <li>
                                    <a href="#">Biblioteka</a>
                                </li>
                                <li>
                                    <a href="#">Oferta biblioteki</a>
                                </li>
                                <li>
                                    <a href="#">NPRCz</a>
                                </li>
                                <li>
                                    <a href="#">Projekt - La CDV</a>
                                </li>
                                <li>
                                    <a href="#">Współpraca</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Wymiany</a>
                                </li>
                                <li>
                                    <a href="#">Galeria zdjęć</a>
                                </li>
                                <li>
                                    <a href="#">Strzelnica</a>
                                </li>
                                <li>
                                    <a href="#">BIP</a>
                                </li>
                                <li>
                                    <a href="#">Plan lekcji</a>
                                </li>
                                <li>
                                    <a href="#">Plany dzwonków</a>
                                </li>
                                <li>
                                    <a href="#">Platforma Synergia</a>
                                </li>
                                <li>
                                    <a href="#">Platforma miejska ED</a>
                                </li>
                                <li>
                                    <a href="#">Kalendarium</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Partnerzy szkoły</h5>
                <div class="card-body">
                    <a href="https://wsaib.pl/">
                        <img src="https://lo2gdynia.pl/images/banners/logo%20wsa.jpg" class="img-fluid w-100">
                    </a>
                    <a href="http://www.kulturalnepomorze.pl/">
                        <img src="https://lo2gdynia.pl/images/banners/logo_fkp.jpg" class="img-fluid w-100">
                    </a>
                    <a href="https://grupa.energa.pl/otoczenie/fundacja">
                        <img src="https://lo2gdynia.pl/images/banners/ENERGA.jpg" class="img-fluid w-100">
                    </a>
                    <a href="https://hotelwieniawa.com/">
                        <img src="https://lo2gdynia.pl/images/banners/logo_cafe-aniol.jpg" class="img-fluid w-100">
                    </a>
                    <a href=""></a>
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Henryk Wołek 2020</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<script type="text/javascript">
    $('body').on('keyup', '#search-posts', function(){
        var searchQuest = $(this).val();

        $.ajax({
           method: 'POST',
           url: '{{route("search")}}',
           dataType: 'json',
           data: {
               '_token': '{{csrf_token()}}',
               searchQuest: searchQuest,
           },
            success: function(response){
               console.log(response);
            }
        });
    });
</script>


</body>

</html>
