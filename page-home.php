<?php
/*
	Template Name: Home
*/
//get_template_part('content','hero');
get_header(); ?>
<div class="contents__outer">
	<div class="contents__inner flex">

	<aside class="aside__outer">
		<div class="aside__inner">
			<?php get_sidebar(); ?>
		</div>
	</aside>
	<!-- /.aside__outer -->

	<main class="main__outer w-full">
		<div class="main__inner py-8 flex justify-center cm">
		<span class="text-4xl text-red-500 font-bold inline-block">page-home.php</span>
		</div>
	</main>
	<!-- /.main__outer -->
	</div>
</div>
<!-- /.contents__outer -->
<?php get_footer(); ?>
