<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<?php wp_head(); ?>
</head>
<body id="bunnypresslite_top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'bunnypresslite' ); ?></a>
<div>
<header>
<div class="bunnypresslite_header <?php echo esc_attr( bunnypresslite_max_content_width() ); ?>">
	<div id="header" itemscope itemtype="https://schema.org/Organization">
	<?php
	if( bunnypresslite_display_header_description() == '1' ) bunnypresslite_header_description_set();

	if( has_custom_logo() ) {
		echo '<div class="bunnypresslite_logo_title">';
		echo '<div class="bunnypresslite_logo">';
		if( is_front_page() || is_home() || is_404() ) {
			if( bunnypresslite_dst() ) echo '<h1>';
		}
		the_custom_logo();
		if( is_front_page() || is_home() || is_404() ) {
			if( bunnypresslite_dst() ) echo '</h1>';
		}
		echo '</div>';
	}
  if( !bunnypresslite_dst() ){
		echo '<div class="sitename" itemprop="name">';
		if( is_front_page() || is_home() || is_404() ) echo '<h1>';
		echo '<a href="' . esc_url( home_url() ) . '/" title="';
		bloginfo('name');
		echo '"><span class="siteicon">';
		bloginfo('name');
		echo '</span></a>';
		if( is_front_page() || is_home() || is_404() ) echo '</h1>';
		echo '</div>';
	}
	if( has_custom_logo() ) echo '</div>';

	if( bunnypresslite_display_header_description() == '2' ) bunnypresslite_header_description_set(); ?>
	</div>
	
	<?php if( has_nav_menu( 'header-menu' ) ) { ?>
		<div class="headermenublock">

			<input type="checkbox" class="bunnypresslite_check" id="checkeds">
			<label class="bunnypresslite_dm" for="checkeds">
				<span class="bar top"></span>
				<span class="bar middle"></span>
				<span class="bar bottom"></span>
				<span class="bunnypresslite_dm_menu"><?php esc_html_e( 'MENU' , 'bunnypresslite' );?></span>
			</label>
			<label class="bunnypresslite_close" for="checkeds"></label>
			<?php

				echo '<nav class="header_navi">';
				$bunnypresslite_navi_pc = '';
	
				if( has_nav_menu( 'header-menu-sp' ) ) {
					wp_nav_menu( array( 
						'theme_location' => 'header-menu-sp',
						'container' => false,
						'menu_class' => false,
						'items_wrap' => '<ul class="navi bunnypresslite_navi_sp">%3$s</ul>',
						'link_before' => '<span>',
						'link_after' => '</span>',
					) );
					$bunnypresslite_navi_pc = ' bunnypresslite_navi_pc';
				}

				wp_nav_menu( array( 
					'theme_location' => 'header-menu',
					'container' => false,
					'menu_class' => false,
					'items_wrap' => '<ul class="navi' . $bunnypresslite_navi_pc . '">%3$s</ul>',
				) );

				echo '</nav>';
			?>
		</div>
	<?php } ?>
	
</div>
</header>

<div class="sitebody">
<div class="<?php echo esc_attr( bunnypresslite_max_content_width() ); ?>">
<?php if( is_active_sidebar( 'sidebar-2' ) ){ ?><div class="<?php echo esc_attr( bunnypresslite_max_content_width() ); ?>"><?php dynamic_sidebar( 'sidebar-2' ); ?></div><?php } ?>
<?php if( bunnypresslite_display_breadcrumb() != '3' ) get_template_part( 'inc/breadcrumb' ); ?>
</div>
<div class="inbody <?php echo esc_attr( bunnypresslite_max_content_width() ); ?>">
	<div id="main" class="<?php echo esc_attr( bunnypresslite_layout() ); ?>_content">