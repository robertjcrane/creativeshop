<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <link rel="stylesheet" href="/main.css">
    <title>{{$title}}</title>
</head>
<body>
    <header class="header-bar mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="#" class="navbar-brand">
                <img src="/storage/images/cs-logo-200x86.png" alt="logo" class="logo">    
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarText">
                    <span class="navbar-toggle-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="\" class="nav-link fw-bold active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="\framing" class="nav-link fw-bold">Framing</a>
                        </li>
                        <li class="nav-item">
                            <a href="\arts-crafts" class="nav-link fw-bold">Arts/Crafts</a>
                        </li>
                        <li class="nav-item">
                            <a href="\stationery" class="nav-link fw-bold">Stationery</a>
                        </li>
                        <li class="nav-item">
                            <a href="\laser" class="nav-link fw-bold">Laser</a>
                        </li>
                        <li class="nav-item">
                            <a href="\design" class="nav-link fw-bold">Design</a>
                        </li>
                        <li class="nav-item">
                            <a href="\about" class="nav-link fw-bold">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="\contact" class="nav-link fw-bold">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-light">
            <div class="container px-4 px-sm-2 my-1">
                <div class="text-black text-center">
                    <h2 class="display-4 fw-bolder">{{$title}}</h2>
                </div>
            </div>
        </div>

    </header>
    <main class="container">

      {{$slot}}

    </main>

    <!-- footer begins -->
    <footer class="border-top bg-dark text-white text-center p-3">
        <p>Copyright &copy; 2006-{{date('Y')}} The Creative Shop</p>
    </footer>

</body>
</html>