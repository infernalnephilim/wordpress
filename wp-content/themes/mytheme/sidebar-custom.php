<ul>
    <li>
    <h2>SIDEBAR</h2>
    </li>
    <li>
    <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
    </li>
    <li id="categories"><?php _e('Categories:'); ?>
    	<ul>
    <?php wp_list_cats(); ?>
    	</ul>
     </li>
     <li id="archives"><?php _e('Archives:'); ?>
          <ul>
    <?php wp_get_archives('type=monthly'); ?>
    </ul>
     </li>
     <li>
     <?php get_links_list(); ?>

     </li>
</ul>