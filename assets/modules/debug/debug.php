<!--debag code-->
<div v-if="isShow" class="debug__js p-4 fixed top-0 left-0 z-50 w-full h-screen text-gray-300" style="background:rgba(0, 0, 0, 0.7);">

<section class="rulers__outer">
    <div class="inner">
      <div class="outer">
        <div class="inner">
          <div class="wh__outer flex items-center h-screen">
            <div class="flex flex-col pb-12">
            <span class="wnum d-ib">vw:{{ w }}</span>
            <span class="hnum d-ib">vh:{{ h }}</span>
            <span class="snum d-ib">sc:{{ s }}</span>
            </div>
            
          </div>
          <div class="line"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="overflow-auto h-screen">
  
  
  <h2 class="text-2xl border-b-2 border-solid my-3">wp関数</h2>
  <div style="" class="mb-12">
  <ul>
      <li><span>the_content(): => </span><?php the_content();?></li>
      <li><span>the_excerpt(); => </span><?php the_title();?></li>
      <li><span>the_permalink(); => </span><?php the_permalink();?></li>
      <li><span>the_category(', '); => </span><?php the_category(', ');?></li>
      <li><span>the_ID(); => </span><?php the_ID();?></li>
      <li><span>edit_post_link(); => </span><?php edit_post_link();?></li>
      <li><span>next_post_link(' %link '); => </span><?php next_post_link(' %link ');?></li>
      <li><span>previous_post_link('%link'); => </span><?php previous_post_link('%link');?></li>
      <li><span>get_links_list(); => </span><?php get_links_list();?></li>
      <li><span>wp_list_pages(); => </span><?php wp_list_pages();?></li>
    </ul>
    <ul>
      <li><span>wp_get_archives(); => </span><?php wp_get_archives();?></li>
      <li><span>wp_list_cats(); => </span><?php wp_list_cats();?></li>
    </ul>
    <ul>
      <li><span>get_calendar(); => </span><?php get_calendar();?></li>
      <li><span>wp_register(); => </span><?php wp_register();?></li>
      <li><span>wp_loginout(); => </span><?php wp_loginout();?></li>
    </ul>
    <ul>
      <li><span>site_url(); => </span><?php site_url();?></li>
      <li><span>wp_title(); => </span><?php wp_title();?></li>
      <li><span>bloginfo('name'); => </span><?php bloginfo('name');?></li>
      <li><span>bloginfo('description'); => </span><?php bloginfo('description');?></li>
      <li><span>get_stylesheet_directory_uri(); => </span><?php get_stylesheet_directory_uri();?></li>
      <li><span>bloginfo('template_url'); => </span><?php bloginfo('template_url');?></li>
      <li><span>bloginfo('atom_url'); => </span><?php bloginfo('atom_url');?></li>
      <li><span>bloginfo('rss2_url'); => </span><?php bloginfo('rss2_url');?></li>
    </ul>
  </div>

  <h2 class="text-2xl border-b-2 border-solid my-3">カスタムフィールド</h2>
  <div style="" class="mb-12">
  <?php
  the_field('image_ url');
  $meta = get_post_meta( get_the_ID() );
  var_dump($meta)
   ?>
  </div>
  </div>

  </div>

<!--//debag code-->