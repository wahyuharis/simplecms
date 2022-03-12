<div class="row">
    
        <?php foreach ($result as $row) { ?>
            <div class="col-4 mt-2 mb-2  blog_details">
                <a href="<?= base_url('post/detail/' . $row->slug) ?>" >
                    <h5><?= $row->title ?></h5>
                    <img width="100%" src="<?= base_url('assets/uploads/files/' . $row->img) ?>">
                </a>
            </div>

        <?php } ?>
   
</div>