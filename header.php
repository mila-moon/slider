<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script><!--call the jQuery min-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script><!--using the slick min-->        
<?php wp_head(); ?> 
<script type="text/javascript">   
    
  $(document).ready(function($) {     
    
    $( "img" ).addClass( "slick-slider-img" );//necessary this class on images div
    
    //start the variable that will control the display time of slider carousel
    var time = <?= get_theme_mod('slider_speed') ?>;//get the value of input (of the new section) and save on a variable "time"
    $("#_customize-input-slider_speed", window.parent.document).on('change', function(){ //obs: here is the COMPLETE ID of the input!!
      time = $(this).val(); 
    });//get the value of input field after been changed (by client on panel control Wordpress) and save it on variable "time" again
    
    
    //start others variables
    var $bar,
      $slick,
      isPause,
      tick,
      percentTime;

    //start the slick slider
    $slick = $('.slider');
    $slick.slick({
    arrows: false,
    speed: 1200,//speed of trasitions
    adaptiveHeight: false
    });

    //for progress bar
    $bar = $('.slider-progress .progressBar');

    //function to start progress bar
    function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 30);
    }

    //funtion to calc the interval (using the variable "time")
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

    //function to reset the progress bar
    function resetProgressbar() {
    $bar.css({
      width: 0 + '%'
    });
    clearTimeout(tick);
    }

    startProgressbar();  //call the function  
  });
</script>
</head>
<body <?php body_class(); ?>>
