<?php

/**
 * This file is part of the Bono CMS
 * 
 * Copyright (c) No Global State Lab
 * 
 * For the full copyright and license information, please view
 * the license file that was distributed with this source code.
 */

return array(
    'meta' => array(
        'name' => 'Shop',
        'description' => 'Default e-commerce theme for Bono CMS',
        'version' => '1.2',
        'author' => 'NGS Labs'
    ),

	// Those plugins are defined in /config/view.php
	'plugins' => array(
		'jquery', 
		'superfish', 
		'to-top', 
		'bootstrap.blue', 
		'bootstrap.core',
        'font-awesome'
	),
	
	// Style sheets and scripts for this theme to load
	'theme' => array(
		'stylesheets' => array(
			'/css/styles.css',
		),
		'scripts' => array(
			'/js/app.js'
		)
	)
);