<?php
/**
 * Utilidades auxiliares para SEO Image Optimizer.
 *
 * @package SEO_Image_Optimizer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function seo_image_optimizer_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
