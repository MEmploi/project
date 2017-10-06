<!-- wallstreet Main Slider --->
<?php $wallstreet_pro_options=theme_data_setup();

      $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>

<!-- /Slider Section -->

<div class="homepage_mycarousel">

    <div class="static-banner">

    <?php if($current_options['home_banner_enabled'] == true) { ?>

                

<?php 

    echo do_shortcode("[metaslider id=376]"); 

?>

            <?php } ?>

    </div>

</div>
<!-- /wallstreet Main Slider --->