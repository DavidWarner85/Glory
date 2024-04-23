<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible">
        <html data-bs-theme="auto">
        <html lang="en" data-bs-theme="auto">
        <title>Base Page</title>
        <meta name="description" content="a set of design components to be used throughout the website">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almendra+SC&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almendra+SC&family=Neuton:ital,wght@0,200;0,300;0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
    </head>
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
        <footer id="footer" class="clearfix">
            <span class="float-start"><img style="margin-left: 10px;" src="images/logoMini.png" alt="Glory Logo"><span style="margin-left: 10px;">Glory&COPY;</span></span>
            <span class="float-end"><span style="margin-right: 10px;">A DataWarner Creation</span><img style="margin-right: 10px;"  src="images/dwMini.png" alt="DataWarner Logo"></span>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./src/bootstrap-auto-dark-mode.js"></script>
        <script src="index.pack.js" async defer></script>
    </body>
