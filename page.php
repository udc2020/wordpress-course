<?php get_header();

   while(have_posts()){

      the_post();?>

<div class="row tm-row tm-mb-45">
   <div class="col-12">
      <hr class="tm-hr-primary tm-mb-55">
      <img src="<?php echo get_theme_file_uri('img/img-05.jpg') ?>" alt="Image" class="img-fluid w-100">
   </div>
</div>
<div class="row tm-row tm-mb-40">
   <div class="col-12">
      <div class="mb-4">
         <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">
            <?php the_title()?>
         </h2>
       
         <p>
         <?php the_content()?>
         </p>
      </div>
   </div>
</div>


   <?php }?>






<?php  get_footer()?>