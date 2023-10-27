<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </head>
    <style>
        header{
            position: fixed;
            width: 100%;
            z-index: 5;
        }

        .discussion {
            width: 90%; /* Définissez la largeur de votre élément div */
            height: 500px; /* Définissez la hauteur de votre élément div */
            overflow: auto; /* Active la barre de défilement automatiquement lorsque le contenu dépasse la taille définie */
        }
        /* Barre de scroll */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Fond */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* corps */
        ::-webkit-scrollbar-thumb {
            background: #aaaaaa;
            border-radius: 150px 150px;
        }

        /* Effet sur la barre de scroll lors du survol */
        ::-webkit-scrollbar-thumb:hover {
            background: #7c7c7c;
        }
    </style>
    <body style="background-color: rgb(223, 214, 214);">

        <header class="p-3 mb-3 border-bottom" style="background-color: white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <img src="images/logo.png" class="bi me-2" width="40" height="40" alt="LOGO">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                        <li><a href="{{route('article.index')}}" class="nav-link px-2 link-secondary">Home</a></li>
                        <li class="dropdown ms-5">
                            <a class="nav-link px-2 link-body-emphasis dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Article
                            </a>
                            @php
                                use App\Models\Category;
                            @endphp
                            <ul class="dropdown-menu">
                                @foreach (Category::all() as $category)
                                    <li><a class="dropdown-item" href="{{route('article.categorie',['categorie'=>$category->name])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="ms-5"><a href="{{route('article.create')}}" class="nav-link px-2 link-body-emphasis">Poster un article</a></li>
                        <li class="ms-5"><a href="{{route('article.message')}}" class="nav-link px-2 link-body-emphasis">Message</a></li>

                    </ul>


                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small">
                            <li><a class="dropdown-item" href="#">Voir mon profil</a></li>

                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>



    <div style="margin: 0 auto; background-color: #f7f9fa; padding-top:6%">

        @yield("content")

    </div>
  </body>
</html>
