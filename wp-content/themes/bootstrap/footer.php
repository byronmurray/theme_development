<footer class="container-fluid site-footer">

    <div class="container flex">

      <div class="columns column-1">

        <img src="<?php echo get_template_directory_uri() ?>/images/footer/footer-logo.png" alt="">

        <div class="footer-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>  
        </div>

      </div>
      
      <div class="columns column-2">

        <div class="social-icons">

          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

        </div>

      </div>

      <div class="columns column-3">

        <h4 class="">1234 Example Street<br>Antartica, Example 0987</h4>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-fax"></i>022 192 4346</li>
          <li><i class="fa-li fa fa-envelope-o"></i>example@hotmail.com</li>
        </ul>

      </div>

    </div>

    <div class="text-center">themename copyright @ 2017 | created by <a href="#">Byron Murray</a></div>


</footer>

<script>
  function initMap() {
    var myLatLng = {lat: -38.1396099, lng: 176.2473443};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 14
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'My Location!'
    });
  }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtxqwb-9TB4RCoYX1XnJ2_QQYReNhx_0M&callback=initMap"
async defer></script>


<?php wp_footer(); ?>
</body>
</html>