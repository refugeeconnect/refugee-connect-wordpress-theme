<?php
	
function my_theme_add_editor_styles() {
    add_editor_style( 'editor.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );