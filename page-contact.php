<?php 
// Template Name:Contact
get_header();
?>

<main class="clear-head container white contact-page">
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
        <div class="page-title">
            <h1><?php the_title(); ?></h1>
        </div>
                    
        <section class="row">
            <div class="col-lg-5 col-sm-8 contact-item">
                <?php the_content(); ?>
            </div>

            <div class="col-lg-push-3 col-lg-4 col-sm-4 contact-item">
                <?php echo do_shortcode('[caldera_form id="CF561e747d4cec5"]') ?>
            </div>
        </section>
        <?php 
                } 
            } 
        ?>
</main>

<div id="map" style="height:400px;"></div>

<script>

var map;
function initMap() {

var	styles = [
    {
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#43b8e4"
            },
            {
                "weight": "3"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#f1f1f1"
            },
            {
                "visibility": "on"
            },
            {
                "weight": "3.00"
            }
        ]
    }
]


var sys = {lat: 52.882829, lng: -1.707907};

  map = new google.maps.Map(document.getElementById('map'), {
    center: sys,
    zoom: 15,
    scrollwheel: false,
    mapTypeControl: false,
    styles: styles
  });

  // Create a marker and set its position.
  var marker = new google.maps.Marker({
    position: sys,
    map: map,
    label: "SYS Systems",
    title: "SYS Systems"
  });

}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLNJ4TF8fDgcOdkDL-MZl9oqE3hYkb-ps&callback=initMap" async defer></script>

<?php
get_footer();
 ?>