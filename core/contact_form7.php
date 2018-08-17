<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 8/17/18
	 * Time: 2:36 PM
	 */

	add_filter( 'wpcf7_autop_or_not', '__return_false' );

	add_filter('wpcf7_form_elements', function($content) {
		$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
		return $content;
	});