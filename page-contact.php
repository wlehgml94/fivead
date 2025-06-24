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
<section class="fa_contact">
  <div class="inner">
    <div class="contact_tit">
      <div class="contact_txt">
        <img src="http://localhost:89/wp-content/themes/fivead/assets/images/common/pc/img_logo.png" alt="">
        <h2>무료 상담 신청</h2>
        <p>고객님의 상황에 맞는 맞춤형 상담을 위해 <br />아래 항목을 기입해주세요. <br />영업일 기준 24시간 이내에 연락드립니다.</p>
        <span>*광고 문의 시 상품 소개서는 메일로 자동 발송됩니다.</span>
      </div>
      <div class="ani_moving hidden_mo" data-hover-only="true">
        <div class="ani_box _box_0" data-depth="0.4" data-limit="0.4"></div>
        <div class="ani_box _box_1" data-depth="-0.2"></div>
        <div class="ani_box _box_2" data-depth-x="1" data-depth-y="0.4" data-limit-x="1" data-limit-y="0.4"></div>
        <div class="ani_box _box_3" data-depth="1"></div>
      </div>
      <div class="hidden_pc vis_img">
        <img src="http://localhost:89/wp-content/themes/fivead/assets/images/contact/mo/person.png" alt="">
      </div>
    </div>
    <div class="contact-contents" ga4-text="contact">
      <?php echo do_shortcode( '[contact-form-7 id="923" title="01.contact"]' ); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>