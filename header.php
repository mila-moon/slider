<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
            

<?php wp_head(); ?>
  
<script type="text/javascript">   
    
  $(document).ready(function($) {     
    
    $( "img" ).addClass( "slick-slider-img" );
    $( "img" ).addClass( "responsive" );
    
    
    var time = <?= get_theme_mod('slider_speed') ?>;
    $("#_customize-input-slider_speed", window.parent.document).on('change', function(){ 
      time = $(this).val(); 
    });
    
    var $bar,
      $slick,
      isPause,
      tick,
      percentTime;

    $slick = $('.slider');
    $slick.slick({
    arrows: false,
    speed: 1200,
    adaptiveHeight: false
    });

    $bar = $('.slider-progress .progressBar');

    function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 30);
    }

    function interval() {
    if (isPause === false) {
      percentTime += 1 / (time + 0.1);
      $bar.css({
      width: percentTime + "%"
      });
      if (percentTime >= 100) {
      $slick.slick('slickNext');
      startProgressbar();
      }
    }
    }

    function resetProgressbar() {
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
    }

    startProgressbar();    
  });
</script>
</head>
<body <?php body_class(); ?>>
