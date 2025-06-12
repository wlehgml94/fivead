<?php
/**
 * Template Name: contact
**/
?>
<?php 
  $meta_title = 'contact';
  $meta_description = 'contact1';
  include_once dirname(__FILE__, 1).'/includes/meta.php';
  get_header(); 
?>
  <div class="side-lead-contents" ga4-text="contact">
    <?php echo do_shortcode( '[contact-form-7 id="923" title="01.contact"]' ); ?>
  </div>
<?php get_footer(); ?>