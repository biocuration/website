<?php

$sBaseDirName = dirname( __FILE__ ).DIRECTORY_SEPARATOR;
if ( $flags[ 'wrap_page_content' ] ) {
	include_once( $sBaseDirName.'index_header.php' );
}


if ( $flags[ 'wrap_page_content' ] ) {
	include_once( $sBaseDirName.'index_footer.php' );
}

if ( $help_video[ 'show' ] ) {
	include_once( $sBaseDirName.'snippets'.DIRECTORY_SEPARATOR.'help_video_player.php' );
}
