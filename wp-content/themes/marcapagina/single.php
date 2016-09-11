<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marcapagina
 */

get_header();
$categoria = obtenerCategoriaPrincipal(get_the_ID());
?>
<div class="overlayContainer">
</div>
<div class="side">
  <div class="btnSide">
     <span class="icon-book-open icons"></span>
  </div>
	<figure class="snip1515">
	  <div class="profile-image">
      <img src="<?php
        if (function_exists('get_wp_term_image'))
        {
            $meta_image = get_wp_term_image($categoria['ID']);
            //It will give category/term image url
        }

        echo $meta_image; // category/term image url
        ?>" class="img-responsive">
    </div>
	  <figcaption>
	    <h3><?php  echo $categoria['nombreCategoria']; ?></h3>
	  </figcaption>
	</figure>
  <hr>
  <ul class="catalogueSubItem">
    <?php
      $args = array(
        "category__in" => $categoria['ID']
      );

      $query = new Wp_Query ($args);
      while ($query->have_posts()) : $query->the_post();

    ?>
    <li class="catalogueSubItem"><a href="<?php echo get_the_permalink(); ?>" title="" class="animation"><?php echo get_the_title(); ?></a></li>
    <?php
      endwhile;
      wp_reset_query();
      //wp_reset_postdata();
    ?>
  </ul>
</div>
<div class="top">
</div>

<div class="wrapper">
  <?php
    while ( have_posts() ) : the_post();
  ?>
  <h1  class="text-center"><?php echo get_the_title(); ?></h1>
  <div class="imagen-post text-center">
    <img src="<?php echo imagenDestacada(get_the_ID(), 'imagenDestacada') ?>" class="img-responsive">
  </div>
  <div class="autor text-center">
    <em>Por:</em> <?php echo get_the_author('nicename'); ?>
  </div>
  <div class="contenido-principal">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php
            the_content();
        ?>
      </div>
    </div>
  </div>
  <?php
    endwhile;
  ?>
</div>
<?php
get_footer();
