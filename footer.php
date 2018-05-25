<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Pluto
 * @since Pluto 1.0
 */
?>
  <script language="javascript" type="text/javascript" src="//js.users.51.la/19225669.js"></script>
<noscript><a href="//www.51.la/?19225669" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="//img.users.51.la/19225669.asp" style="border:none" /></a></noscript>
  <a href="#" class="os-back-to-top"></a>
  <div class="display-type"></div>
  <?php
    // if protect images checkbox in admin is set to true - load tag with copyright text
    if(get_field('protect_images_from_copying', 'option') === true){
      $copyright_text = (get_field('text_for_image_right_click', 'option') != '') ? get_field('text_for_image_right_click', 'option') : __('This photo is copyright protected', 'pluto');
      echo '<div class="copyright-tooltip">'.$copyright_text.'</div>';
    }
  ?>
  <?php wp_footer(); ?>

</body>
</html>