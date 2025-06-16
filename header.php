<?php include_once('./wp-content/themes/fivead/includes/config.php'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php if (preg_match('/(submit_|privacy)/', CHECK_PATH)) { //검색색인 케이스 체크 필요
    $robot_search = 'noindex, nofollow';
  } else {
    $robot_search = 'index,follow';
  } ?>
  <meta name="robots" content="<?= $robot_search; ?>">
  <meta name="Yeti" content="<?= $robot_search; ?>" />
  <meta name="Googlebot" content="<?= $robot_search; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">

  <?php
  $gtm_id = 'W462JDR';
  $meta_set_title;
  $meta_set_description;
  $meta_set_image;
  //기본 메타 태그 세팅
  $default_meta_title = '파이브애드';
  $default_meta_description = '국내 1위 공유오피스 패스트파이브에서 당신의 제품과 서비스를 홍보하세요';
  $default_meta_image = WEB_URL.'/assets/images/meta/common.jpg';
  //각 페이지에 메타 태그 설정이 있을 경우, 해당 태그 설정. 없을 경우 기본 태그 설정
  if (!isset($_POST['meta_set_title'])) {
    $meta_title_text = $default_meta_title;
  } else {
    $meta_title = $_POST['meta_set_title'];
    $meta_title_text = $meta_title;
  }
  if (!isset($_POST['meta_set_description'])) {
    $meta_description_text = $default_meta_description;
  } else {
    $meta_description = $_POST['meta_set_description'];
    $meta_description_text = $meta_description;
  }
  if (!isset($_POST['meta_set_image'])) {
    $check_path = str_replace('/', '', CHECK_PATH);
    if (str_contains($check_path, 'content-')) {
      $meta_image = WEB_URL.'/assets/images/meta/'.$check_path.'.jpg';
      $meta_image_text = $meta_image;
    } else {
      $meta_image_text = $default_meta_image;
    }
  } else {
    $meta_image = WEB_URL.'/assets/images/meta'.$_POST['meta_set_image'];
    $meta_image_text = $meta_image;
  }
  $meta_title_text =  $meta_title_text.' | 파이브애드';
?>
  <title><?= $meta_title_text; ?></title>
  <meta name="author" content="FASTFIVE">
  <meta name="description" content="<?= $meta_description_text; ?>">
  <!-- 필수는 og 태그 -->
  <meta property="og:site_name" content="파이브애드">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ko_KR">
  <meta property="og:url" content="<?= $base_URL; ?>">
  <meta property="og:title" content="<?= $meta_title_text; ?>">
  <meta property="og:description" content="<?= $meta_description_text; ?>">
  <meta property="og:image" content="<?= $meta_image_text; ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="700">
  <!-- marketing tag -->
  <meta name="facebook-domain-verification" content="yei3586lhdtswj85sebj8cuvampss0" />
  <?php wp_head(); ?>
  <link rel="icon" href="<?= WEB_URL; ?>/assets/images/favicon.png" />
  <link rel="stylesheet" href="<?= WEB_URL; ?>/assets/lib/jquery-ui.css" type="text/css" />
  <link rel="stylesheet" href="<?= WEB_URL; ?>/assets/css/common.css" rel="prerender" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Start VWO Async SmartCode -->
  <link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" />
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $gtm_id ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php 
  $host = $_SERVER['REQUEST_URI'];
  $page_path = strpos($host, '&') ? strtok($host, '&') : strtok($host, '?');
  $page_name = 'n_main';

  // formatted_contact_number
  $formatted_contact_number = str_replace('-', '.', CONTACT_NUMBER);
?>
  <h2 class="d_hidden" id="pageName"><?= $page_name; ?></h2>
  <div><a href="/contact_1" class="ga4__topBanner" ga4-text="FIVE AD 서비스 소개서 다운로드"></a></div>
  <main class="fivead-visual-wrapper">