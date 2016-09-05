<?php
  /*
    Template name: Homenajes
  */
  get_header();
  $post_id = get_the_ID();
  $descarga = get_field('link_de_descarga', $post_id);
?>
<div id="fh5co-intro-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2><?php echo get_the_title(); ?></h2>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <?php if($descarga): ?>
      <div class="text-right">
        <h4>¿Te gustó el diseño? <a id="descargaRebo" href="<?php echo $descarga; ?>" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Descárgalo</a></h4>
      </div>
    <?php endif; ?>
    <div class="row">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <?php
          //slider_principal
          $images = get_field('slider_principal', $post_id);
          //print_r($images);
          $cont = 0;
          $active = '';
          foreach ($images as $image) {
            if($cont == 0) {
              $active = 'active';
            }else {
              $active = ' ';
            }
            $controladores .= '<li data-target="#carousel-example-generic" data-slide-to="'.$cont.'" class="'.$active.'"></li>';
            $htmlSliders .= '
              <div class="item '.$active.'">
                <img class="img-responsive" src="'.$image['sizes']['slider-principal'].'" alt="...">
                <div class="carousel-caption">
                </div>
              </div>
            ';
            $cont++;
          }
        ?>
        <ol class="carousel-indicators">
          <?php echo $controladores; ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php echo $htmlSliders; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
  </div>
  <div id="fh5co-client-section">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
  				<h2><?php echo get_the_excerpt(); ?></h2>
  				<p><?php echo get_post_field('post_content', $post_id); ?></p>
  			</div>
  		</div>
  		<div class="row slick-tetimonios">
        <?php
          $images = get_field('avatares', $post_id);
          //print_r($images);
          foreach ($images as $image) {
        ?>
      			<div class="col-md-6 text-center">
      				<div class="testimony">
      					<span class="quote"><img src="<?php echo $image['sizes']['avatar'];  ?>" class="img-responsive img-circle"></i></span>
      					<blockquote id="scroll-panel">
      						<p><?php echo $image['caption'];  ?></p>
      					</blockquote>
                <span><a href="<?php echo $image['alt'];  ?>" class="icon-twitter twitter-color"><?php echo $image['description'];  ?></a></span>
      				</div>
            </div>
          <?php
            }
          ?>
  		</div>
  	</div>
  </div>
<?php
  get_footer();
?>
