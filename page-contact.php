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
<section>
  <div class="contact_tit">
    <img src="" alt="">
    <h2>무료 상담 신청</h2>
    <p>고객님의 상황에 맞는 맞춤형 상담을 위해 <br />아래 항목을 기입해주세요. <br />영업일 기준 24시간 이내에 연락드립니다.</p>
    <span>*광고 문의 시 상품 소개서는 메일로 자동 발송됩니다.</span>
  </div>
   <div class="contact-contents" ga4-text="contact">
      <?php echo do_shortcode( '[contact-form-7 id="923" title="01.contact"]' ); ?>
    </div>
</section>
<?php get_footer(); ?>