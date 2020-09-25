<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<nav>
	<?php
		//管理画面でメニューを作成しfunction.phpに設定を記述。サイド管理画面で位置を決め、ここに記述
		//ドキュメント
		//https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/wp_nav_menu
		wp_nav_menu( array(
			'theme_location'	=> 'sidebar',//function.phpで設定したやつ
		) );
	?>
	</nav>


<!--
	<aside id="secondary" class="widget-area">
	<div class="inner container mx-auto px-4">
		<h2 class="text-6xl text-red-500">sidebar.php</h2>
		<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>
-->
<!-- #secondary -->
