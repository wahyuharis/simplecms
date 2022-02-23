<?php
$tags = trim($this->input->get('tags'));
$segment1 = strtolower($this->uri->segment(1));
?>
<li class="nav-item">
    <?php
    $active = '';
    if ($tags == '' && $segment1 == 'home') {
        $active = 'active';
    }
    ?>
    <a class="nav-link <?= $active ?>" href="<?= base_url('home/') ?>">Home
        <span class="visually-hidden"></span>
    </a>
</li>

<li class="nav-item">
    <?php
    $active = '';
    if ($tags == '' && $segment1 == 'post') {
        $active = 'active';
    }
    ?>
    <a class="nav-link <?= $active ?>" href="<?= base_url('post/') ?>">Blog</a>
</li>

<li class="nav-item">
    <?php
    $active = '';
    if ($tags == 'Project' && $segment1 == 'post') {
        $active = 'active';
    }
    ?>
    <a class="nav-link <?= $active ?>" href="<?= base_url('post/?tags=Project') ?>">Projects</a>
</li>

<li class="nav-item dropdown">
    <?php
    $active = '';
    if (($tags == 'Codeigniter' || $tags == 'Laravel') && $segment1 == 'post') {
        $active = 'active';
    }
    ?>
    <a class="nav-link dropdown-toggle <?= $active ?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Framework Tricks
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="<?= base_url('post/?tags=Codeigniter') ?>">CODEIGNITER</a>
        <a class="dropdown-item" href="<?= base_url('post/?tags=Laravel') ?>">LARAVEL</a>
    </div>
</li>

<li class="nav-item">
    <?php
    $active = '';
    if ($segment1 == 'about') {
        $active = 'active';
    }
    ?>
    <a class="nav-link <?= $active ?>" href="<?= base_url('about/') ?>">About</a>
</li>