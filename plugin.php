<?php
/**
Plugin Name: Share on SemanticScuttle
Plugin URI: https://github.com/jonrandoem/yourls-semanticscuttle
Description: Add <a href="http://semanticscuttle.sourceforge.net/">SemanticScuttle</a> to the list of Quick Share destinations
Version: 1.0
Author: JonRandoem
Author URI: https://github.com/jonrandoem/
**/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'share_links', 'jr_yourls_sscuttle' );

function jr_yourls_sscuttle( $args ) {
	list( $longurl, $shorturl, $title, $text ) = $args;
	$longurl = rawurlencode( $longurl );
	$title = rawurlencode( htmlspecialchars_decode( $title ) );
	if ( defined('SEMANTICSCUTTLE_URL') ) {
		$sscuttle_url = SEMANTICSCUTTLE_URL;
		echo <<<SSCUTTLE
		
		<style type="text/css">
		#share_sscuttle{background:url('../user/plugins/yourls-semanticscuttle/sscuttle.gif') left center no-repeat;}
		</style>
		
		<a id="share_sscuttle"
			href="$sscuttle_url/bookmarks.php?action=add&amp;address=$longurl&amp;title=$title&amp;description="
			title="Share on SemanticScuttle"
			onclick="yourls_share_on_sscuttle();return false;">SemanticScuttle
		</a>
		
		<script type="text/javascript">
		// Send to SemanticScuttle open window
		function yourls_share_on_sscuttle() {
			var url = $('#share_sscuttle').attr('href');
			window.open(url, 'sscuttle', 'toolbar=no,width=800,height=600');
			return false;
		}
		// Dynamically update SemanticScuttle link
		// when user clicks on the "Share" Action icon, event $('#tweet_body').keypress() is fired, so we'll add to this
		$('#tweet_body').keypress(function(){
			var title = encodeURIComponent( $('#titlelink').val() );
			var url = encodeURIComponent( $('#copylink').val() );
			var sscuttle = '$sscuttle_url/bookmarks.php?action=add&address='+url+'&title='+title+'&description=';
			$('#share_sscuttle').attr('href', sscuttle);		
		});
		</script>

SSCUTTLE;
	}
}