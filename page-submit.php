<?php
/**
 * Template Name: 견적 문의 완료
**/
?>
<?php get_header(); 

$img_src = WEB_URL.'/assets/images/';
?>
  <!-- complete-wrapper -->
  <section class="complete-wrapper">
    <div class="inner">
      <h2><strong>입력하신 이메일로</strong><br /> <strong>광고 상품 소개서</strong>를 <br class="hidden_pc" />발송했습니다</h2>
      <p class="complete_desc">기재해주신 정보로 영업일 기준 <br />24시간 이내에 연락드릴 예정이에요. <br />기다리시는 시간이 길어지지 않도록 <br class="hidden_pc" />최대한 빨리 연락드리겠습니다!</p>
      <div class="btn_group">
        <a href="/" class="btnText ga4__cta_middle">파이브애드 더 알아보기</a>
      </div>
      <div class="img_box">
        <img src="<?=$img_src?>submit/pc/submit.png" class="img_resize" alt="">
      </div>
    </div>
  </section>
<!-- //END :: complete-wrapper -->
<?php get_footer(); ?>