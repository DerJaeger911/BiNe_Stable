<?php get_header();?>

<section class= "page-wrap">

    <div class='container'>
        <!--Input .XLSX here-->
        <input type="file" id="my_file_input" />
        <div id='my_file_output'></div>
        
        <!--Run ReaderScript-->
        
        
        
        <br>
        <!--<h1><?php the_title();?></h1>-->
        <?php get_template_part('includes/section','content');?>
    </div>

</section>
<?php get_footer();?>