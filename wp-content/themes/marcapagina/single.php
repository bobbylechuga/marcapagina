<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marcapagina
 */

get_header(); ?>
<div class="overlayContainer">
</div>
<div class="side">
  <div class="btnSide">
     M
  </div>
	<figure class="snip1515">
	  <div class="profile-image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample47.jpg" alt="sample47" /></div>
	  <figcaption>
	    <h3>Fleece Marigold</h3>
	    <div class="icons"><a href="#"><i class="ion-social-reddit"></i></a>
	      <a href="#"> <i class="fa fa-twitter"></i></a>
	      <a href="#"> <i class="fa fa-facebook"></i></a>
	    </div>
	  </figcaption>
	</figure>
  <hr>
  <ul class="catalogueList">
    <li class="catalogueItem"><p><?php the_category(', '); ?></p>
      <ul class="catalogueSubList">
        <li class="catalogueSubItem"><a href="" title="" class="animation">English books</a></li>
        <li class="catalogueSubItem"><a href="" title="" class="animation">Dutch books</a></li>
        <li class="catalogueSubItem"><a href="" title="" class="animation">German books</a></li>
        <li class="catalogueSubItem"><a href="" title="" class="animation">French books</a></li>
      </ul>

</div>

<div class="top">

</div>

<div class="wrapper">
  <h1>Sidebar slide</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras odio nisl, luctus quis feugiat sed, ultrices tincidunt odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ac est sit amet mi vestibulum rhoncus. Aenean interdum mi odio, eu tincidunt neque facilisis sed. Vestibulum imperdiet sodales felis, sed posuere leo tempus vitae. Etiam risus enim, bibendum et diam ut, sollicitudin commodo nibh. Sed sed dictum leo. Mauris vitae turpis lectus. Phasellus consequat ante eu enim posuere euismod. Duis semper mollis justo, quis blandit velit ornare ac. Maecenas augue elit, consectetur ac ornare at, pulvinar a leo. Pellentesque malesuada erat eros, at rhoncus diam dapibus eu.</p>

  <p>Vestibulum vitae semper quam. Morbi laoreet eu tortor vitae lacinia. Suspendisse tempor nunc ac convallis accumsan. Donec sed urna nec leo consequat ultricies non eu nibh. Nam suscipit mauris a metus aliquam lobortis. Vivamus eget elit libero. Nulla elementum ligula vitae vehicula bibendum. Donec tempus blandit magna. Aenean quis libero eget purus egestas molestie eu non lorem. Phasellus a placerat quam, sed hendrerit est. Sed bibendum rutrum libero, sit amet vulputate massa auctor sit amet.</p>
</div>
<?php
get_footer();
