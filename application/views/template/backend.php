<!DOCTYPE html>
<html lang="id">

<head>
    <title><?= FRONT_TITLE ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?= base_url(FRONT_FAV) ?>">
    <link href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

    <?php foreach ($gci->css_files as $file) : ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>sketchy/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('node_modules/summernote/dist/summernote.min.css'); ?>" />

    
    <script src="<?php echo base_url('node_modules/summernote/dist/summernote.min.js') ?>"></script>
    <?php foreach ($gci->js_files as $file) : ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>


</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <?php
                foreach ($menu as $km => $url) {
                    $is_activ = "";
                    if (strtolower($url) == strtolower($this->uri->segment(1) . '/' . $this->uri->segment(2) . "/" . $this->uri->segment(3))) {
                        $is_activ = "active";
                    }
                ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $is_activ ?>" href="<?= base_url($url) ?>"><?= $km ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Username
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="/login">Login</a></li> -->
                        <li><a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </nav>

    <div class="container-fluid mt-3 ps-5 pe-5" style="min-height: 500px;">
        <div class="row">
            <div class="col-12">
               <h1> <?= $title ?> </h1>
            </div>
            <div class="col-12">
                <?php echo $gci->output ?>

            </div>
        </div>
    </div>



    <?php foreach ($custom_js as $row) { ?>
        <script src="<?= $row ?>"></script>
    <?php } ?>
</body>

</html>