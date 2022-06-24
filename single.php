<?php
get_header();

while (have_posts()) {
   the_post(); ?>
<?php } ?>


<div class="row tm-row">
   <div class="col-12">
      <hr class="tm-hr-primary tm-mb-55">
      <!-- Video player 1422x800 -->
      <?php if (has_header_video()) : ?>
         <?php the_post_thumbnail('meduim', ['class' => 'w-full'])  ?>
      <?php endif ?>


   </div>
</div>
<div class="row tm-row">
   <div class="col-lg-8 tm-post-col">
      <div class="tm-post-full">
         <div class="mb-4">
            <h2 class="pt-2 tm-color-primary tm-post-title">
               <?php the_title() ?>
            </h2>
            <p class="tm-mb-40"><?php echo get_the_date('M d ,Y') ?> posted by <?php the_author() ?></p>

            <?php the_content() ?>


            <span class="d-block text-right tm-color-primary">
               <?php
               foreach ((get_the_category()) as $category) {
                  echo $category->cat_name . ' ';
               }
               ?>
            </span>
         </div>

      </div>
   </div>
   <aside class="col-lg-4 tm-aside-col">
      <div class="tm-post-sidebar">
         <hr class="mb-3 tm-hr-primary">
         <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
         <ul class="tm-mb-75 pl-5 tm-category-list">

            <?php
         

            $categories = get_categories();
            foreach($categories as $category){
               echo "<li>
                <a href='".get_category_link($category->term_id)."' class='tm-color-primary'>".$category->name."</a></li>";
            }

            ?>

            

         </ul>
         <hr class="mb-3 tm-hr-primary">
         
      </div>
   </aside>
</div>



<?php get_footer() ?>