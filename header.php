<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme_starter
 */

//ポストIDからスラッグを取り出してbodyタグのIDに入れる
 $page = get_post( get_the_ID() );
 $slug = $page->post_name;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body <?php body_class($slug." Blog"); ?>>
<div class="check-mode__js" :class="[{ 'check-mode': isCheckMode },{ 'check-mode-outer': isCheckModeOuter },{ 'check-mode-bl': isCheckModeBl },{ 'check-mode-el': isCheckModeEl }]" >
<?php include 'assets/modules/debug/debug.php'?>

<div class="header__outer cm min-h-screen">
  <div class="inner">
  <div class="mx-auto flex">
  
  

<aside class="aside__outer">
  <?php get_sidebar(); ?>
</aside>
<main class="outer-main w-full">
 <div class="inner">
<!--ここから-->
<!-- <header class="outer-header cm">
<h2 class="text-6xl text-red-500">header.php</h2>
  <div class="inner">
    <h3 class="text-2xl text-red-500">wp_nav_menu(設定:function)</h3>

  <?php
     //管理画面でメニューを作成しfunction.phpに設定を記述。サイド管理画面で位置を決め、ここに記述
     //ドキュメント
     //https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/wp_nav_menu
      //wp_nav_menu( array(

        //'theme_location'	=> 'header',//function.phpで設定したやつ
        // 'container'			=> '',
        // 'container_class'	=> '',
        // 'menu_class'		=> ''

     // ) );
    ?>
  </div>

</header> -->


