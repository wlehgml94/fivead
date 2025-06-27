<?php
/**
 * 404 template
**/
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access not permitted' );
}
?>
<?php get_header(); ?>
<main id="main" class="main error-page-main">
	<div class="inner">
		<div class="row error-page-row">
			<h1>페이지를 찾을 수 없음</h1>
			<p>방문하시려는 페이지의 주소가 잘못 입력되었거나, <br>페이지의 주소가 변경 혹은 삭제되어 <br>요청하신 페이지를 찾을 수 없습니다.</p>
			<div class="btn_group">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">메인 홈으로 이동하기</a>
			</div>
		</div>
	</div>
</main>
<?php get_footer();
