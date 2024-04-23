@extends('layouts.layout')

@section('content')
   <body>
        <nav id="site_nav" class="navbar navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php"><img src="images/logo32.png" alt="Glory Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="narrators_guide.php">Narrators</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="heroes_guide.php">Heroes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="worldspace_guide.php">Worldspace</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="skills_guide.php">Skills</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="equipment_guide.php">Equipment</a>
                        </li>
                    </ul>
                </div>
                <span><button id="account_btn"><a href="">Account</a></button></span>   
            </div>
        </nav>
        <div id="main" class="row">
            <div id="content" class="col-9">
                <H1>Content</H1>
            </div>
            <div id="ad_bar" class="col-3">
                <H1>Ad Bar</H1>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./src/bootstrap-auto-dark-mode.js"></script>
        <script src="index.pack.js" async defer></script>
    </body>
    @yield('content')