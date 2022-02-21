<?php foreach ($result as $row) { ?>

    <div class="row">
        <div class="col-12 mt-2 mb-2 blog_details">
            <h5><?= $row->title ?></h5>
            <?= getFirstParagraph($row->content) ?>
        </div>
    </div>

<?php } ?>

<?= $pagination ?>


<script>
    $('.blog_details').ready(function() {

        $('.blog_details').find('p').css('font-family','var(--bs-body-font-family)');
        $('.blog_details').find('p').css('font-size','var(--bs-body-font-size)');
        $('.blog_details').find('p').css('font-weight','var(--bs-body-font-weight)');

        $('.blog_details').find('span').css('font-family','var(--bs-body-font-family)');
        $('.blog_details').find('span').css('font-size','var(--bs-body-font-size)');
        $('.blog_details').find('span').css('font-weight','var(--bs-body-font-weight)');

        $('.blog_details').find('ul').css('font-family','var(--bs-body-font-family)');
        $('.blog_details').find('ul').css('font-size','var(--bs-body-font-size)');
        $('.blog_details').find('ul').css('font-weight','var(--bs-body-font-weight)');

        $('.blog_details').find('li').css('font-family','var(--bs-body-font-family)');
        $('.blog_details').find('li').css('font-size','var(--bs-body-font-size)');
        $('.blog_details').find('li').css('font-weight','var(--bs-body-font-weight)');

        // $('.blog_details').find('p').removeAttr('style');
        // $('.blog_details').find('span').removeAttr('style');
        // $('.blog_details').find('ul').removeAttr('style');
        // $('.blog_details').find('li').removeAttr('style');

        $('.blog_details').find('table').addClass('table');
        $('.blog_details').find('table').addClass('table-bordered');
        $('.blog_details').find('table').removeAttr('border');
    });
</script>