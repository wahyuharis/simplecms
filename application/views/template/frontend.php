<!DOCTYPE html>
<html lang="id">

<head>
    <title><?= FRONT_TITLE ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(FRONT_FAV) ?>">
    <link href="<?= base_url('sketchy/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

    <style>
        #wallpaper-front {
            margin-top: 10px;
            height: 400px;
            width: 100%;
            background-image: url('<?= base_url('assets/img3475j9sf9.jpg') ?>');
            background-position: 0px 0px;
            background-repeat: repeat;
            background-size: cover;
        }

        ul.no-bullets {
            list-style-type: none;
            padding: 0;
            margin: 0;
            font-size: 22px;
        }

        ul.no-bullets>li {
            margin-bottom: 20px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?= FRONT_NAVBRAND ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <?php require_once 'frontend_navbar.php'; ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="wallpaper-front">
    </div>



    <div class="container-fluid mt-3 ps-5 pe-5" style="min-height: 500px;">
        <div class="row">
            <div class="col-9" >
                <h3><?= $heading ?></h3>
                <?= $content ?>
            </div>
            <div class="col-3">
                <?php require_once 'sideright_menu.php' ?>
            </div>
        </div>
    </div>




    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link">Copyright © 2022 - 2023</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://bayubayu.my.id/">Bayubayu.my.id</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link">All rights reserved.</span>
                </li>
            </ul>
        </div>
    </nav>

</body>

</html>