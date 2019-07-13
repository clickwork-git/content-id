<?php

class pluginContentID extends Plugin {

	public function form()
	{
		global $L;

		$html  = '<div>';
		$html .= 'There are not settings for this plugin at the moment.';
		$html .= '</div>';

		return $html;
	}

	public function adminBodyEnd() {

 		$html = PHP_EOL.'<script>'.PHP_EOL;
 		$html .= 'var uuid = $("#jsuuid").val()'.PHP_EOL;
 		$html .= '$uuid = uuid'.PHP_EOL;
 		$html .= 'if( $uuid != "" ) {'.PHP_EOL;
 		$html .= '$( ".switch-button" ).append( "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Content ID:</em> ")'.PHP_EOL;
 		$html .= '$( ".switch-button" ).append( uuid )'.PHP_EOL;
 		$html .= '}'.PHP_EOL;
 		$html .= '</script>'.PHP_EOL;
 		return $html;

    }

}
