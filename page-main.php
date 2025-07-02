<?php
/**
 * Template Name: 메인
**/
?>
<?php get_header(); 
  $meta_title = '1위 공유오피스 패스트파이브가 만든 광고 플랫폼 파이브애드';
  $meta_description = '당신의 고객이 가장 긴 시간을 보내는 사무 공간에서 제품과 서비스를 홍보하세요';
  include_once dirname(__FILE__, 1).'/includes/meta.php';
  $img_src = WEB_URL.'/assets/images/';
  $video_src = WEB_URL.'/assets/video/';
?>
<!-- main-contents  -->
<div class="main-contents">
  <section class="visual">
    <video class="video hidden_mo" autoplay="" muted="" loop="" playsinline="">
      <source type="video/mp4" src="<?= $video_src;?>pc/bg_fivead_250224.mp4">
    </video>
    <video class="video hidden_pc" autoplay="" muted="" loop="" playsinline="">
      <source type="video/mp4" src="<?= $video_src;?>mo/bg_fivead_250224.mp4">
    </video>
    <div class="inner">
      <div class="tit ani_start">
        <h2>고객과 연결되는 광고 플랫폼</h2>
        <img src="<?= $img_src; ?>/main/pc/img_logo.png" alt="">
        <p>국내 1위 공유오피스 패스트파이브에서 <br />당신의 제품과 서비스를 홍보하세요</p>
        <div class="btn_group">
          <a class="ga4__cta_top" href="/contact">광고 상품 문의</a>
        </div>
    </div>
    </div>
  </section>
  <section class="sec1">
    <div class="inner">
      <div class="tit ani_start">
        <div class="num"><span>01</span></div>
        <h2>파이브애드는 <br />
          국내 1위 공유오피스 <br class="hidden_pc" /><strong>패스트파이브</strong>의 <br />
          <strong>종합 광고 플랫폼</strong>입니다</h2>
          <p>700여개의 브랜드가 파이브애드와 <br class="hidden_pc" />함께 했습니다</p>
      </div>
      <div class="img_box hidden_mo">
        <img src="<?= $img_src; ?>main/pc/sec_1.jpg" alt="">
      </div>
      <div class="logo_wrap hidden_pc">
        <div class="logo_swiper">
          <div class="swiper-wrapper">
            <img class="swiper-slide" src="<?= $img_src; ?>main/mo/sec_1_1.png" class="hidden_pc" alt="">
            <img class="swiper-slide" src="<?= $img_src; ?>main/mo/sec_1_2.png" class="hidden_pc" alt="">
          </div>
        <div>
        <div class="logo_prev _prev"></div>
        <div class="logo_next _next"></div>
      </div>
    </div>
  </section>
  <section class="sec2">
    <div class="inner">
      <div class="tit ani_start">
        <div class="num"><span>02</span></div>
        <h2><strong>패스트파이브 전 지점</strong>에서 <br />다양한 제품과 서비스 홍보가 <br class="hidden_pc" />가능합니다</h2>
      </div>
      <ul class="service_tab">
        <li class="_active"><a href="javascript:;">교육</a></li>
        <li><a href="javascript:;">뷰티</a></li>
        <li><a href="javascript:;">가전</a></li>
        <li><a href="javascript:;">F&B</a></li>
        <li><a href="javascript:;">콘텐츠</a></li>
        <li><a href="javascript:;">서비스</a></li>
      </ul>
      <div class="service_wrap">
        <div class="service_swiper">
          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_swiper1.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_swiper2.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_swiper3.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_swiper4.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_swiper5.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_swiper6.jpg" class="img_resize" alt="">
            </li>
          </ul>
        </div>
        <div class="service_prev _prev"></div>
        <div class="service_next _next"></div>
      </div>
    </div>
  </section>
  <section class="sec3">
    <div class="inner">
      <div class="tit ani_start">
        <div class="num"><span>03</span></div>
        <h2><strong>100만 명의 직장인</strong>과 <br class="hidden_pc" /><strong> <?= number_format(FA_TOTAL_OFFICE) ?>개의 기업</strong>에게 <br class="hidden_mo" />제품과 <br class="hidden_pc" />서비스를 홍보할 수 있습니다</h2>
        <p><strong>매년 3,468시간 </strong><br class="hidden_pc" />당신의 고객이 가장 긴 시간을 보내는 <br class="hidden_pc" />사무 공간에 파이브애드가 있습니다</p>
      </div>
      <ul class="ani_start">
        <li>
          <img src="<?= $img_src; ?>main/pc/ico_map.png" class="img_resize" alt="">
          <p>서울 및 수도권 오피스</p>
          <h3 class="counter" data-count="<?= FA_TOTAL_BUILDNG ?>" data-suffix="개 빌딩+"><?= FA_TOTAL_BUILDNG ?>개 빌딩+</h3>
        </li>
        <li>
          <img src="<?= $img_src; ?>main/pc/ico_member.png" class="img_resize" alt="">
          <p>입주 멤버</p>
          <h3 class="counter" data-count="<?= FA_TOTAL_MEMBER ?>" data-suffix="명+"><?= FA_TOTAL_MEMBER ?>명+</h3>
        </li>
        <li>
          <img src="<?= $img_src; ?>main/pc/ico_monthy.png" class="img_resize" alt="">
          <p>월 방문객</p>
          <h3 class="counter" data-count="<?= FA_MONTHY_MEMBER ?>" data-suffix="명+"><?= FA_MONTHY_MEMBER ?>명+</h3>
        </li>
        <li>
          <img src="<?= $img_src; ?>main/pc/ico_company.png" class="img_resize" alt="">
          <p>입주 기업</p>
          <h3 class="counter" data-count="<?= FA_TOTAL_OFFICE ?>" data-suffix="개+"><?= FA_TOTAL_OFFICE ?>개+</h3>
        </li>
      </ul>
      <p class="txt_anno">*<?= FA_UPDATE ?> 기준</p>
    </div>
  </section>
  <section class="sec4">
    <div class="inner">
      <div class="tit ani_start">
        <div class="num"><span>04</span></div>
        <h2><strong>구매력이 확실한 <br />2040 직장인</strong>에게 노출됩니다</h2>
        <p>패스트파이브의 모든 구성원은 파이브애드의 <br class="hidden_pc" />잠재 고객이 될 수 있습니다</p>
      </div>
      <div class="lst_age">
        <ul class="age_grp">
          <li>
            <p>사업가/직장인</p>
            <strong>100%</strong>
          </li>
          <li>
            <p>남녀 성비</p>
            <strong>5:5</strong>
          </li>
          <li>
            <p>2040 세대</p>
            <strong>90%</strong>
          </li>
        </ul>
        <div class="age_swiper">
          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_vis1.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_vis2.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_vis3.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_vis4.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_vis5.jpg" class="img_resize" alt="">
            </li>
            <li class="swiper-slide">
              <img src="<?= $img_src; ?>main/pc/lst_vis6.jpg" class="img_resize" alt="">
            </li>
          </ul>
        </div>
        <p class="txt_anno">*입주 멤버 기준</p>
      </div>
    </div>
  </section>
  <section class="sec5">
    <div class="inner">
      <div class="tit ani_start">
        <div class="num"><span>05</span></div>
        <h2><strong>노출과 체험이 동시</strong>에 <br class="hidden_pc" />가능합니다</h2>
        <p>패스트파이브의 다양한 공간과 디스플레이를 <br class="hidden_pc" />활용해 고객에게 다가가세요</p>
      </div>
      <div class="ds_txt_swiper">
        <ul class="ds_tab">
          <li class="_active"><a href="javascript:;">디스플레이 광고</a></li>
          <li ><a href="javascript:;">오프라인 광고</a></li>
          <li><a href="javascript:;">인쇄물 광고</a></li>
        </ul>
      </div>
      <div class="ds_wrap">
        <div class="ds_swiper">
          <ul class="swiper-wrapper">
            <li class="lst_ds swiper-slide">
              <p>패스트파이브 엘리베이터 홀과 메인 라운지에 제품과 <br class="hidden_pc" />서비스를 노출하세요</p>
              <ul class="ds_display ds_cont">
                <li>
                  <div class="img_box">
                    <img src="<?= $img_src; ?>main/pc/ico_ds1.png" class="img_resize" alt="">
                  </div>
                  <div class="txt_box">
                    <h3>엘리베이터 DS</h3>
                    <p><?= FA_TOTAL_EV ?>개 지점 내 <?= FA_TOTAL_EV_DS ?>기</p>
                  </div>
                </li>
                <li>
                  <div class="img_box">
                    <img src="<?= $img_src; ?>main/pc/ico_ds2.png" class="img_resize" alt="">
                  </div>
                  <div class="txt_box">
                    <h3>스탠딩 DS</h3>
                    <p><?= FA_TOTAL_STANDING ?>개 지점 내 <?= FA_TOTAL_STANDING_DS ?>기</p>
                  </div>
                </li>
                <li>
                  <div class="img_box">
                    <img src="<?= $img_src; ?>main/pc/ico_ds3.png" class="img_resize" alt="">
                  </div>
                  <div class="txt_box">
                    <h3>라운지 DS</h3>
                    <p>서울/수도권 <?= FA_TOTAL_LOUNGE ?>개 건물 내 <br /><?= FA_TOTAL_LOUNGE_DS ?>기</p>
                  </div>
                </li>
              </ul>
            </li>
            <li class="lst_ds swiper-slide">
              <p>이용 인구가 가장 많은 라운지에서 제품과 서비스를 <br class="hidden_pc" />경험시키세요</p>
              <span class="sub_txt">*총 <?= FA_TOTAL; ?>개 건물 홍보 가능</span>
              <ul class="ds_offline ds_cont">
                <li>
                  <div class="img_box">
                    <img src="<?= $img_src; ?>main/pc/ico_ds4.png" class="img_resize" alt="">
                  </div>
                  <div class="txt_box">
                    <h3>팝업스토어</h3>
                    <p>라운지 내 일부 공간을 활용한 <br />현장 프로모션 이벤트</p>
                  </div>
                </li>
                <li>
                  <div class="img_box">
                    <img src="<?= $img_src; ?>main/pc/ico_ds5.png" class="img_resize" alt="">
                  </div>
                  <div class="txt_box">
                    <h3>샘플링 이벤트</h3>
                    <p>라운지 내 홍보 제품을 비치하여 <br />고객 경험 기회 제공</p>
                  </div>
                </li>
              </ul>
            </li>
            <li class="lst_ds swiper-slide">
              <p>패스트파이브에서 매일 사용하는 종이컵에 <br class="hidden_pc" />자연스럽게 제품과 서비스를 홍보하세요</p>
              <span class="sub_txt">*라운지 종이컵, 라운지 리플릿 광고 가능</span>
              <div class="ds_online ds_cont">
                <div class="img_box">
                  <img src="<?= $img_src; ?>main/pc/ico_ds6.png" class="img_resize" alt="">
                </div>
                <ul class="txt_box">
                  <li>
                    <h3>40만 개 소진</h3>
                    <p>전 지점 매월</p>
                  </li>
                  <li>
                    <h3>매월 45만 명</h3>
                    <p>라운지 방문</p>
                  </li>
                  <li>
                    <h3>약 78%</h3>
                    <p>종이컵 사용</p>
                  </li>
                  <li>
                    <h3>QR코드 삽입</h3>
                    <p>추가 홍보물 부착 가능</p>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <div class="ds_prev _prev"></div>
        <div class="ds_next _next"></div>
      </div>
    </div>
  </section>
  <section class="sec6">
    <div class="inner">
      <div class="tit ani_start">
        <p>아무나가 아닌 확실한 타겟에게 <br />홍보하고 싶다면?</p>
        <img src="<?= $img_src; ?>/main/pc/footer_logo.png" alt="">
        <div class="btn_group">
          <a class="ga4__cta_bottom" href="/contact">광고 상품 문의</a>
        </div>
      </div>
      <div class="img_box">
        <img src="<?= $img_src; ?>/main/pc/footer_illust.png" class="img_resize" alt="">
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
<!-- //END :: main-contents -->