<?php
/*
 * Plugin Name: Topwaves Cars
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: topwaves-cars
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-topwaves-cars.php' );
require_once( 'includes/class-topwaves-cars-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-topwaves-cars-admin-api.php' );
require_once( 'includes/lib/class-topwaves-cars-post-type.php' );
require_once( 'includes/lib/class-topwaves-cars-taxonomy.php' );

/**
 * Returns the main instance of Topwaves_Cars to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Topwaves_Cars
 */
function Topwaves_Cars () {
	$instance = Topwaves_Cars::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Topwaves_Cars_Settings::instance( $instance );
	}

	return $instance;
}

Topwaves_Cars();


Topwaves_Cars()->register_post_type(
	'car',
	__('Cars', 'topwaves-cars'),
	__('Car', 'topwaves-cars')
);

Topwaves_Cars()->register_taxonomy(
	'car_type',
	__( 'Car Types', 'topwaves-cars' ),
	__( 'Car Type', 'topwaves-cars' ),
	'car'
);

Topwaves_Cars()->register_taxonomy(
	'car_make',
	__( 'Manufacturer', 'topwaves-cars' ),
	__( 'Manufacturer', 'topwaves-cars' ),
	'car'
);

Topwaves_Cars()->register_taxonomy(
	'car_model',
	__( 'Models', 'topwaves-cars' ),
	__( 'Model', 'topwaves-cars' ),
	'car'
);

Topwaves_Cars()->register_taxonomy(
	'car_fuel',
	__( 'Fuel Types', 'topwaves-cars' ),
	__( 'Fuel type', 'topwaves-cars' ),
	'car'
);

Topwaves_Cars()->register_taxonomy(
	'car_status',
	__( 'Car Status', 'topwaves-cars' ),
	__( 'Car Status', 'topwaves-cars' ),
	'car'
);