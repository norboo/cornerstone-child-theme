<?php
/*
Template Name: Homepage Template
*/

get_header(); ?>

<div class="row full-width collapse orbit-row">
	<div class="large-12 columns show-for-medium-up">
        
        <?php $the_query = new WP_Query(array('post_type'=>'orbit','category_name' => 'home-slider') ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="example-orbit" data-orbit>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <?php the_post_thumbnail('tour-banner');?>
                    <div class="header-wrapper">
                        <h1 class="text-center"><?php the_title();?></h1>
                        <?php the_content();?>
                        <?php 
                            $_orbit_meta_box_caption_text = get_post_meta(get_the_ID(), "_orbit_meta_box_caption_text", true);
                            $_orbit_meta_box_link_text = get_post_meta(get_the_ID(), "_orbit_meta_box_link_text", true);
                        ?>
                        <a href="<?php echo $_orbit_meta_box_link_text;?>"><?php echo $_orbit_meta_box_caption_text;?></a>
                    </div>
                  </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <?php endif; ?>
        
	</div>
    
    <div class="large-12 columns show-for-small-only">
        
        <?php $the_query = new WP_Query(array('post_type'=>'orbit','category_name' => 'home-slider') ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="example-orbit" data-orbit>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                    <?php the_post_thumbnail('mobile-orbit');?>
                    <div class="header-wrapper">
                        <h1 class="text-center"><?php the_title();?></h1>
                        <?php the_content();?>
                        <?php 
                            $_orbit_meta_box_caption_text = get_post_meta(get_the_ID(), "_orbit_meta_box_caption_text", true);
                            $_orbit_meta_box_link_text = get_post_meta(get_the_ID(), "_orbit_meta_box_link_text", true);
                        ?>
                        <a href="<?php echo $_orbit_meta_box_link_text;?>"><?php echo $_orbit_meta_box_caption_text;?></a>
                    </div>
                  </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
        <?php endif; ?>
        
	</div>

    
    
    
</div><!-- end .orbit-row-->
         
<div class="row">
	<div class="large-4 columns">
		<img src="http://placehold.it/400x300&text=[img]"/>
		<h4>This is a content section.</h4>
		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
	</div>
	<div class="large-4 columns">
		<img src="http://placehold.it/400x300&text=[img]"/>
		<h4>This is a content section.</h4>
		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
	</div>
	<div class="large-4 columns">
		<img src="http://placehold.it/400x300&text=[img]"/>
		<h4>This is a content section.</h4>
		<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa. Boudin aliqua adipisicing rump corned beef.</p>
	</div>
</div>
        
     
<div class="row">
	<div class="large-12 columns">
		<div class="panel">
			<h4>Get in touch!</h4>
			<div class="row">
				<div class="large-9 columns">
					<p>We'd love to hear from you, you attractive person you.</p>
				</div>
				<div class="large-3 columns">
					<a href="#" class="radius button right">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
