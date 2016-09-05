// Click outside of offcanvass
var mobileMenuOutsideClick = function() {

  $(document).click(function (e) {
    var container = $("#fh5co-offcanvas, .js-fh5co-close-offcanvas");
    if (!container.is(e.target) && container.has(e.target).length === 0) {

      if ( $('#fh5co-offcanvas').hasClass('animated fadeInLeft') ) {

        $('#fh5co-offcanvas').addClass('animated fadeOutLeft');
      setTimeout(function(){
        $('#fh5co-offcanvas').css('display', 'none');
        $('#fh5co-offcanvas').removeClass('animated fadeOutLeft fadeInLeft');
      }, 1000);
      $('.js-fh5co-nav-toggle').removeClass('active');

      }


    }
  });

  $('body').on('click', '.js-fh5co-close-offcanvas', function(event){


      $('#fh5co-offcanvas').addClass('animated fadeOutLeft');
    setTimeout(function(){
      $('#fh5co-offcanvas').css('display', 'none');
      $('#fh5co-offcanvas').removeClass('animated fadeOutLeft fadeInLeft');
    }, 1000);
    $('.js-fh5co-nav-toggle').removeClass('active');

      event.preventDefault();

  });

};





// Burger Menu
var burgerMenu = function() {

  $('body').on('click', '.js-fh5co-nav-toggle', function(event){

    var $this = $(this);

    $('#fh5co-offcanvas').css('display', 'block');
    setTimeout(function(){
      $('#fh5co-offcanvas').addClass('animated fadeInLeft');
    }, 100);

    // $('body').toggleClass('fh5co-overflow offcanvas-visible');
    $this.toggleClass('active');
    event.preventDefault();

  });

};
