<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marcapagina
 */

get_header();
  global $post;
  $page_slug=$post->post_name;
  if ($page_slug <> "numeros"):
    include(locate_template('template-parts/content-page.php'));
  else:
?>
  <div id="fh5co-work-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
          <h2><?php echo get_the_title(); ?></h2>
          <p>
            <?php
              while ( have_posts() ) : the_post();
                echo get_the_content();
              endwhile;
              wp_reset_query();
            ?>
          </p>
        </div>
      </div>
      <div class="row">
        <?php
            $args = array(
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => $post->ID,
              'order'          => 'ASC',
              'orderby'        => 'menu_order'
           );
          $parent = get_posts ( $args );
          //print_r($parent);
          $cont = 1;
          $totalArticulos;
          $articulosCreados = 0;

          foreach ($parent as $post => $valor):
            $termId = get_field('tag_del_numero', $valor->ID);
            $totalArticulos = intval(get_field('total_articulos', $valor->ID));
            $articulosCreados = intval(get_field('tag_del_numero', $valor->ID));
            if(!$articulosCreados): $articulosCreados = 0;endif;
            $porcentaje = obtenerPorcentaje($articulosCreados, $totalArticulos);
        ?>
          <div class="col-md-4 text-center">
            <div class="work-inner">
              <a href="#" class="work-grid" style="background-image: url(<?php
                if (function_exists('get_wp_term_image'))
                {
                    $meta_image = get_wp_term_image($termId);
                    //It will give category/term image url
                }

                echo $meta_image; // category/term image url
                ?>);">
              </a>
              <!--
              <div class="desc">
                <h3><a href="#"><?php echo $valor->post_title; ?></a></h3>
                <span>N&uacute;mero <?php echo $cont; ?></span>
              </div>-->
              <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3" style="padding: 30px;">
                  <div class="c100 p<?php echo $porcentaje; ?> small">
                    <span><?php echo $porcentaje; ?>%</span>
                    <div class="slice">
                      <div class="bar"></div>
                      <div class="fill"></div>
                    </div>
                  </div>
                  <div style="clear:both"></div>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                  <div class="desc">
                    <h3><a href="#"><?php echo $valor->post_title; ?></a></h3>
                    <span>N&uacute;mero <?php echo $cont; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php $cont++; endforeach; ?>
      </div>
    </div>
  </div>
<?php
  endif;
?>
<?php
  get_footer();
?>
