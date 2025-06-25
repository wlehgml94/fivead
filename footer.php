
<footer class="footer">
  <div class="footer-inner">
    <div class="">
      <h2>CONTACT US</h2>
      <ul>
        <li><a href="mailto:<?php echo CONTACT_EMAIL ?>"><?php echo CONTACT_EMAIL; ?></a></li>
        <li class=""><a href="tel:<?php echo CONTACT_NUMBER; ?>"><?php echo CONTACT_NUMBER; ?></a></li>
      </ul>
    </div>
    <div>
      <h2>COMPANY</h2>
      <ul>
        <li>패스트파이브㈜ | 대표 : 김대일</li>
        <li>사업자등록번호 : 151-81-00025 | <a href="/privacy">개인정보처리방침</a></li>
      </ul>
    </div>
  </div>
</footer>
</main>
<!-- LAYER :: 개인정보 수집, 이용 동의서 -->
<section class="common-agree _privacy">
  <div class="agree-container">
    <h2>개인정보 수집, 이용 동의서</h2>
    <div class="agree-content">
      <div>
        <p>패스트파이브(주)에서는 개인정보 보호를 <br class="hidden_pc" />위하여 <br class="hidden_mo" />
          개인정보 보호지침을 마련하고 <br class="hidden_pc" />이를 준수하고 있습니다.</p>
        <dl>
          <dt>1. 개인 정보의 수집 · 이용 목적</dt>
          <dd>인테리어 상담, 신청서 및 자료 발송</dd>
        </dl>
        <dl>
          <dt>2. 수집하는 개인정보의 항목</dt>
          <dd>회사명, 담당자 성함/직함, 담당자 연락처, 업무 이메일</dd>
        </dl>
        <dl>
          <dt>3. 개인정보의 보유 · 이용 기간</dt>
          <dd>수집일로부터 2년</dd>
        </dl>
      </div>
      <ul>
        <li>위의 개인정보 수집 동의를 거부할 수 <br class="hidden_pc" />있으며, <br class="hidden_mo" />
          거부 시 인테리어 상담, 신청서 및 <br class="hidden_pc" />자료 발송을 받을 수 없습니다.
        </li>
        <li>더 자세한 내용은 <a href="/privacy">개인정보 처리방침</a>을 <br class="hidden_pc" />확인해 주세요.</li>
      </ul>
    </div>
    <a href="javascript:;" class="bt_close">
      <span class="hidden">닫기</span>
    </a>
  </div>
</section>
<!-- LAYER :: 마케팅 활용 동의서 -->
<!-- <section class="common-agree _marketing">
  <div class="agree-container">
    <h2>마케팅 활용 동의서</h2>
    <div class="agree-content">
      <div>
        <p>
          패스트파이브(주)에서는 개인정보 보호를 <br class="hidden_pc" />위하여 <br class="hidden_mo" />
          개인정보 보호지침을 마련하고 <br class="hidden_pc" />이를 준수하고 있습니다.</p>
        <dl>
          <dt>1. 개인 정보의 수집 · 이용 목적</dt>
          <dd>인테리어 상품, 혜택 안내 및 패스트파이브의 <br />다양한 상품, 서비스 관련 광고성 정보 발송</dd>
        </dl>
        <dl>
          <dt>2. 수집하는 개인정보의 항목</dt>
          <dd>회사명, 담당자 성함/직함, 담당자 연락처, 업무 이메일</dd>
        </dl>
        <dl>
          <dt>3. 개인정보의 보유 · 이용 기간</dt>
          <dd>동의 철회 시까지</dd>
        </dl>
      </div>
      <ul>
        <li>위의 개인정보 수집 동의를 거부할 수 <br class="hidden_pc" />있으며,
          <br class="hidden_mo" />거부 시 인테리어 상품 및 혜택 안내 <br class="hidden_pc" />등을 제공받을 수 없습니다.
        </li>
        <li>당사는 개인정보보호법 및 정보통신망법을 <br class="hidden_pc" />준수하고 있으며,
          <br class="hidden_mo" />해당 동의 내용을 기반으로 <br class="hidden_pc" />개인정보 수집 및 <br class="hidden_mo" />정보 수신 동의로 간주합니다.
        </li>
      </ul>
    </div>
    <a href="javascript:;" class="bt_close">
      <span class="hidden">닫기</span>
    </a>
  </div>
</section> -->

<!-- SCRIPT START -->
<?php wp_footer(); ?>
<script src="<?= WEB_URL; ?>/assets/lib/jquery-3.6.1.min.js"></script>
<script src="<?= WEB_URL; ?>/assets/lib/jquery-ui.min.js"></script>
<script src="<?= WEB_URL; ?>/assets/lib/swiper-bundle.min.js"></script>
<? if(is_home() || is_front_page()){ ?>
  <script src="<?= WEB_URL; ?>/assets/js/main.js"></script>
<?php } ?>
<?php if (is_page('contact')) { ?>
  <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script src="<?= WEB_URL; ?>/assets/lib/daterangepicker.min.js" type="text/javascript"></script>
  <script src="<?= WEB_URL; ?>/assets/lib/parallax.min.js" type="text/javascript"></script>
  <script src="<?= WEB_URL; ?>/assets/js/contact.js"></script>
<?php } ?>
<!-- contactForm -->
<script src="<?= WEB_URL; ?>/assets/js/contact/contactForm_common.js" type="text/javascript"></script>
<script src="<?= WEB_URL; ?>/assets/js/contact/contactForm_valid.js" type="text/javascript"></script>
<!-- GA -->
<script type="text/javascript" src="https://www.fastfive.co.kr/wp-content/common/gtm_common_ver3.js"></script>

</body>

</html>