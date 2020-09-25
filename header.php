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

<body <?php body_class($slug."__outer"); ?>>
<div class="page__outer check-mode__js" :class="[{ 'check-mode': isCheckMode },{ 'check-mode-outer': isCheckModeOuter },{ 'check-mode-bl': isCheckModeBl },{ 'check-mode-el': isCheckModeEl }]" >
<?php include 'assets/modules/debug/debug.php'?>
  <div class="page__inner">
    <header class="header__outer cm">
      <div class="header__inner py-8 flex justify-center">
        <span class="text-4xl text-red-500 font-bold inline-block">header</span>
      </div>
    </header>



