<?php get_header() ?>



<div class="row tm-row">
    <?php

    while (have_posts()) {


        the_post(); ?>

        <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            <a href=" <?php the_permalink() ?>" class="effect-lily tm-post-link tm-pt-60">
                <div class="tm-post-link-inner">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid', 'alt' => 'Image']); ?>


                    <?php endif ?>
                </div>
                <span class="position-absolute tm-new-badge">
                    <?php
                    foreach ((get_the_category()) as $category) {
                        echo $category->cat_name . ' ';
                    }

                    ?>
                </span>
                <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title() ?></h2>
            </a>
            <p class="tm-pt-30" max="10">
                <?php
                echo wp_trim_words(get_the_content(), 20, '...');
                ?>
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary">
                    <?php get_the_author() ?>
                </span>
                <span class="tm-color-primary">
                    <?php echo get_the_date("d M Y ") ?>
                </span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span>36 comments</span>
                <span>by <?php echo get_the_author() ?></span>
            </div>
        </article>
    <?php }

    ?>




</div>
<div class="row tm-row tm-mt-100 tm-mb-75 mb-5">
    <div class="tm-prev-next-wrapper">
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
    </div>
    <div class="tm-paging-wrapper">
        <span class="d-inline-block mr-3">Page</span>
        <nav class="tm-paging-nav d-inline-block">
            <ul>
                <li class="tm-paging-item active">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>

<?php get_footer() ?>