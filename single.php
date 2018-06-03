<?php get_header(); ?>

<div class="container">
  <div class="main">
  
    <?php if(have_posts()) : ?>
      <?php while(have_posts()): the_post(); ?>
      <article class="post">
        <h3>
          <?php the_title(); ?>
        </h3>
        <div class="meta">
          Created By: 
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
            <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
          </a>
        </div>

        <?php if(has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
          </div> 
        <?php endif; ?>

        <?php the_content(); ?>
      </article>
        
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop( 'Sorry no Posts found' ); ?>
    <?php endif; ?>
    
    <?php comments_template(); ?>
  </div>
</div>

<?php get_footer( ); ?>