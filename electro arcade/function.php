<?php
add_action( 'wp_head', 'el_child_404_page_font', 10 );

function el_child_404_page_font() {
    if ( is_404() ) {
        ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <?php
    }
}