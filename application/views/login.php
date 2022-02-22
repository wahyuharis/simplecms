<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= FRONT_TITLE ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('sketchy/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('node_modules/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>
    <div class="container mt-5">


        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h2><?= FRONT_TITLE ?></h2>
                <form action="<?=base_url('login/submit')?>" method="post">
                    <div class="mb-3 mt-3">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                    </div>
                    <!-- <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
</body>

</html>