<?php
  $host = $_SERVER['HTTP_HOST'];
  $path = $_SERVER['REQUEST_URI'];
  $path = strpos($path, '?type') ? strtok($path, '&') : strtok($path, '?');
  //$path = strtok($path, '?');
  //echo $path;

	$base_URL = (@$_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
	$base_URL .= $_SERVER['HTTP_HOST'];
	$relative_path = preg_replace('`\/[^/]*\.php$`i', '', $_SERVER['PHP_SELF']);
	$web_path = $base_URL.'/wp-content/themes/fivead'.$relative_path;

  $submit = "/(submit)/";
  $check_submit = preg_match($submit, $path);
  $check_others = $check_submit || is_404() || is_page('privacy');

  // info
  $contact_number = '0269599221';
  $contact_email = 'fivead@fastfive.co.kr';

  
  
  define('THIS_DOMAIN', $base_URL);
  define('CHECK_PATH', $path);
  define('WEB_URL', $web_path);
  //기타 페이지 체크
  define('CHECK_SUBMIT', $check_submit);
  define('CHECK_OTHERS', $check_others);
  // 홈페이지 정보
  define('CONTACT_NUMBER', $contact_number);
  define('CONTACT_EMAIL', $contact_email);
  define('FA_TOTAL', 59); //총 지점수
  define('FA_TOTAL_BUILDNG', 850); //총 건축수
  define('FA_TOTAL_OFFICE', number_format(5000)); //총 입주기업
  define('FA_TOTAL_MEMBER', number_format(350000)); //총 멤버수
  define('FA_MONTHY_MEMBER', number_format(1000000)); //총 멤버수
  define('FA_TOTAL_EV', 50); //총 엘리베이터 지점
  define('FA_TOTAL_EV_DS', 201); //총 엘리베이터 엘리베이터 기기수
  define('FA_TOTAL_STANDING', 49); //총 스탠딩 기기 지점
  define('FA_TOTAL_STANDING_DS', 58); //총 스탠딩 기기수
  define('FA_TOTAL_LOUNGE', 232); //총 라운지 건물
  define('FA_TOTAL_LOUNGE_DS', 460); //총 라운지 기기수
  define('FA_UPDATE', '2025년 3월'); //총 라운지 기기수
?>