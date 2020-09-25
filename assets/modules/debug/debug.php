<!--debag code-->
<div v-if="isShow" class="debug__js p-4 fixed top-0 left-0 z-50 w-full h-screen text-white" style="background:rgba(0, 0, 0, 0.7);">

<section class="rulers__outer">
    <div class="inner">
      <div class="outer">
        <div class="inner">
          <div class="wh__outer flex flex-col">
            <span class="wnum d-ib">vw:{{ w }}</span>
            <span class="hnum d-ib">vh:{{ h }}</span>
            <span class="snum d-ib">sc:{{ s }}</span>
          </div>
          <div class="line"></div>
        </div>
      </div>
    </div>
  </section>
  <h2 class="text-2xl border-b-2 border-solid mb-3">wp関数</h2>
  <div style="height: 40%;" class="overflow-auto mb-12">
  <ul>
      <li><span class="text-green-500">the_content(): => </span><?php the_content();?></li>
      <li><span class="text-green-500">the_excerpt(); => </span><?php the_title();?></li>
      <li><span class="text-green-500">the_permalink(); => </span><?php the_permalink();?></li>
      <li><span class="text-green-500">the_category(', '); => </span><?php the_category(', ');?></li>
      <li><span class="text-green-500">the_ID(); => </span><?php the_ID();?></li>
      <li><span class="text-green-500">edit_post_link(); => </span><?php edit_post_link();?></li>
      <li><span class="text-green-500">next_post_link(' %link '); => </span><?php next_post_link(' %link ');?></li>
      <li><span class="text-green-500">previous_post_link('%link'); => </span><?php previous_post_link('%link');?></li>
      <li><span class="text-green-500">get_links_list(); => </span><?php get_links_list();?></li>
      <li><span class="text-green-500">wp_list_pages(); => </span><?php wp_list_pages();?></li>
    </ul>
    <ul>
      <li><span class="text-green-500">wp_get_archives(); => </span><?php wp_get_archives();?></li>
      <li><span class="text-green-500">wp_list_cats(); => </span><?php wp_list_cats();?></li>
    </ul>
    <ul>
      <li><span class="text-green-500">get_calendar(); => </span><?php get_calendar();?></li>
      <li><span class="text-green-500">wp_register(); => </span><?php wp_register();?></li>
      <li><span class="text-green-500">wp_loginout(); => </span><?php wp_loginout();?></li>
    </ul>
    <ul>
      <li><span class="text-green-500">site_url(); => </span><?php site_url();?></li>
      <li><span class="text-green-500">wp_title(); => </span><?php wp_title();?></li>
      <li><span class="text-green-500">bloginfo('name'); => </span><?php bloginfo('name');?></li>
      <li><span class="text-green-500">bloginfo('description'); => </span><?php bloginfo('description');?></li>
      <li><span class="text-green-500">get_stylesheet_directory_uri(); => </span><?php get_stylesheet_directory_uri();?></li>
      <li><span class="text-green-500">bloginfo('template_url'); => </span><?php bloginfo('template_url');?></li>
      <li><span class="text-green-500">bloginfo('atom_url'); => </span><?php bloginfo('atom_url');?></li>
      <li><span class="text-green-500">bloginfo('rss2_url'); => </span><?php bloginfo('rss2_url');?></li>
    </ul>
  </div>

  <h2 class="text-2xl border-b-2 border-solid mb-3">カスタムフィールド</h2>
  <div style="height: 40%;" class="overflow-auto">
  <?php the_meta(); ?>
  </div>
  </div>
<!-- <div class="grid bg-gray-400">
  <div class="col">
  
    <ul>
      <li>the_content(): => <?php the_content();?></li>
      <li>the_excerpt(); => <?php the_title();?></li>
      <li>the_permalink(); => <?php the_permalink();?></li>
      <li>the_category(', '); => <?php the_category(', ');?></li>
      <li>the_ID(); => <?php the_ID();?></li>
      <li>edit_post_link(); => <?php edit_post_link();?></li>
      <li>next_post_link(' %link '); => <?php next_post_link(' %link ');?></li>
      <li>previous_post_link('%link'); => <?php previous_post_link('%link');?></li>
      <li>get_links_list(); => <?php get_links_list();?></li>
      <li>wp_list_pages(); => <?php wp_list_pages();?></li>
    </ul>
  </div>
  <div class="col">
    <ul>
    <li>wp_get_archives(); => <?php wp_get_archives();?></li>
    <li>wp_list_cats(); => <?php wp_list_cats();?></li>

    </ul>
  </div>
  <div class="col">
    <ul>
      <li>get_calendar(); => <?php get_calendar();?></li>
      <li>wp_register(); => <?php wp_register();?></li>
      <li>wp_loginout(); => <?php wp_loginout();?></li>
    </ul>
  </div> -->
<!--   <div class="col">
    <ul>
      <li>site_url(); => <?php site_url();?></li>
      <li>wp_title(); => <?php wp_title();?></li>
      <li>bloginfo('name'); => <?php bloginfo('name');?></li>
      <li>bloginfo('description'); => <?php bloginfo('description');?></li>
      <li>get_stylesheet_directory_uri(); => <?php get_stylesheet_directory_uri();?></li>
      <li>bloginfo('template_url'); => <?php bloginfo('template_url');?></li>
      <li>bloginfo('atom_url'); => <?php bloginfo('atom_url');?></li>
      <li>bloginfo('rss2_url'); => <?php bloginfo('rss2_url');?></li>
    </ul>
  </div>
  <section>
    <div class="inner">
      <div class="outer">
        <div class="inner ">
          <div class="wh__outer flex flex-direction-column">
            <span class="wnum d-ib">w:{{ w }}</span>
            <span class="hnum d-ib">h:{{ h }}</span>
          </div>
          <div class="s__outer flex flex-justify-fe">
            <span class="snum d-ib">s:{{ s }}</span>
          </div>
          <div class="line"></div>
        </div>
      </div>
    </div>
  </section> -->
  <!--  -->
  <!-- <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4">
 <?php the_meta(); ?>
  </textarea> 
  <div style="" class="cm">
  <?php the_meta(); ?>
  </div>

</div>
</div> -->
<!--//debag code-->