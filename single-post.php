<?php
/* Template Name: Presentatie Template */

get_header(); ?>

    <section class="blog">
        <div class="container">
            <div class="row">
                    <div id="container-single">
                    <div class="col-lg-8">
                        <?php
                        while ( have_posts() ) : the_post(); ?>

                        <h2 class="single"><?php the_title();?></a></h2>
                            <div id="content-height">
                        <?php the_content();?>
                            </div>


                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>

                    </div>
                    <div class="col-lg-4" id="author-height">
                        <div id="portret">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?><br>
                        </div>
                        <b>Auteur: </b><?php the_author() ?>
                        <?php the_author_lastname(); ?><br>
                        <b>Email: </b><?php the_author_email(); ?><br>
                        <b>Aantal posts: </b><?php the_author_posts(); ?><br>
                        <b>Biografie: </b><br><?php the_author_description(); ?>

                    </div>
                    </div>
                    </div>
            </div>
    </section>

<?php get_footer(); ?>