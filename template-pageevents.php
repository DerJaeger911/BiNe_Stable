<?php
/*
Template Name: Events
*/
?>
<?php get_header();?>

<div class='container'>
    <h1><?php the_title();?></h1>
    
    <!--Bootstrap test-->
    <p>Bootstrap Test</p>
    <div class="row">
            <div class="col-lg-6">
                <div class="p-3 mb-2 bg-primary text-white">
                    Hello World
                </div>
        </div>

        <div class="col-lg-6">
            <div class="p-3 mb-2 bg-danger text-white">
                <?php get_template_part('includes/section','content');?>
            </div>
        </div>


   
   
</div>

<?php get_footer();?>