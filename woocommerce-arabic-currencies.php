<?php
/**
 * Plugin Name: WooCommerce Arabic Currencies
 * Plugin URI:
 * Description: This plugin for add custom currencies to woocommerce but for arabic currencies.
 * Version: 1.2.2
 * Author: Said El Bakkali
 * Author URI: https://saidelbakkali.com/
 * Text Domain: woocommerce-arabic-currencies
 * Domain Path: /lang/
 * License: GPL2
 *
 * @package woocommerce_arabic_currencies
 */

if ( ! defined( 'WPINC' ) ) {
	exit; // Exit if accessed directly.
}

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
* Check if WooCommerce is active
*/
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {

	/**
	* Add arabic currencies
	*/
	add_filter( 'woocommerce_currencies', 'woocommerce_arabic_currencies' );

	/**
	 * Function woocommerce_arabic_currencies description
	 *
	 * @param  string $currencies
	 * @return array
	 */
	function woocommerce_arabic_currencies( $currencies ) {

		$currencies['MAD'] = __( 'Moroccan Dirham', 'woocommerce-arabic-currencies' );
		$currencies['EGP'] = __( 'Egyptian Pound', 'woocommerce-arabic-currencies' );
		$currencies['IQD'] = __( 'Iraqi Dinars', 'woocommerce-arabic-currencies' );
		$currencies['SYP'] = __( 'Syrian Pound', 'woocommerce-arabic-currencies' );
		$currencies['LBP'] = __( 'Lebanese Pound', 'woocommerce-arabic-currencies' );
		$currencies['JOD'] = __( 'Jordanian Dinar', 'woocommerce-arabic-currencies' );
		$currencies['YER'] = __( 'Yemen Riyal', 'woocommerce-arabic-currencies' );
		$currencies['LYD'] = __( 'Libyan Dinar', 'woocommerce-arabic-currencies' );
		$currencies['SDG'] = __( 'Sudanese Pound', 'woocommerce-arabic-currencies' );
		$currencies['TND'] = __( 'Tunisian Dinar', 'woocommerce-arabic-currencies' );
		$currencies['DZD'] = __( 'Algerian Dinar', 'woocommerce-arabic-currencies' );
		$currencies['MRO'] = __( 'Mauritania Ouguiya', 'woocommerce-arabic-currencies' );
		$currencies['AED'] = __( 'Emirati Dirham', 'woocommerce-arabic-currencies' );
		$currencies['SOS'] = __( 'Somali shilling ', 'woocommerce-arabic-currencies' );
		$currencies['FDJ'] = __( 'Djibouti Franc', 'woocommerce-arabic-currencies' );
		$currencies['KMF'] = __( 'Comorian Franc', 'woocommerce-arabic-currencies' );
		$currencies['BHD'] = __( 'Bahraini Dinar', 'woocommerce-arabic-currencies' );
		$currencies['KWD'] = __( 'Kuwaiti Dinar', 'woocommerce-arabic-currencies' );
		$currencies['OMR'] = __( 'Omani Rial', 'woocommerce-arabic-currencies' );
		$currencies['QAR'] = __( 'Qatari Riyal', 'woocommerce-arabic-currencies' );
		$currencies['SAR'] = __( 'Saudi Riyal', 'woocommerce-arabic-currencies' );
		  return $currencies;
	}

	/**
	 *  Add arabic currencies symbols
	 */

	add_filter( 'woocommerce_currency_symbol', 'woocommerce_arabic_currencies_symbol', 10, 2 );

	/**
	 * Function woocommerce_arabic_currencies_symbol description
	 *
	 * @param  string $currency_symbol
	 * @param  string $currency
	 * @return string
	 */
	function woocommerce_arabic_currencies_symbol( $currency_symbol, $currency ) {
		switch ( $currency ) {
			case 'MAD': $currency_symbol = __( 'MAD', 'woocommerce-arabic-currencies' );
	  break;
			case 'EGP': $currency_symbol = __( 'EGP', 'woocommerce-arabic-currencies' );
	  break;
			case 'IQD': $currency_symbol = __( 'IQD', 'woocommerce-arabic-currencies' );
	  break;
			case 'SYP': $currency_symbol = __( 'SYP', 'woocommerce-arabic-currencies' );
	  break;
			case 'LBP': $currency_symbol = __( 'LBP', 'woocommerce-arabic-currencies' );
	  break;
			case 'JOD': $currency_symbol = __( 'JOD', 'woocommerce-arabic-currencies' );
	  break;
			case 'YER': $currency_symbol = __( 'YER', 'woocommerce-arabic-currencies' );
	  break;
			case 'LYD': $currency_symbol = __( 'LYD', 'woocommerce-arabic-currencies' );
	  break;
			case 'SDG': $currency_symbol = __( 'SDG', 'woocommerce-arabic-currencies' );
	  break;
			case 'TND': $currency_symbol = __( 'TND', 'woocommerce-arabic-currencies' );
	  break;
			case 'DZD': $currency_symbol = __( 'DZD', 'woocommerce-arabic-currencies' );
	  break;
			case 'MRO': $currency_symbol = __( 'MRO', 'woocommerce-arabic-currencies' );
	  break;
			case 'AED': $currency_symbol = __( 'AED', 'woocommerce-arabic-currencies' );
	  break;
			case 'SOS': $currency_symbol = __( 'SOS', 'woocommerce-arabic-currencies' );
	  break;
			case 'FDJ': $currency_symbol = __( 'FDJ', 'woocommerce-arabic-currencies' );
	  break;
			case 'KMF': $currency_symbol = __( 'KMF', 'woocommerce-arabic-currencies' );
	  break;
			case 'BHD': $currency_symbol = __( 'BHD', 'woocommerce-arabic-currencies' );
	  break;
			case 'KWD': $currency_symbol = __( 'KWD', 'woocommerce-arabic-currencies' );
	  break;
			case 'OMR': $currency_symbol = __( 'OMR', 'woocommerce-arabic-currencies' );
	  break;
			case 'QAR': $currency_symbol = __( 'QAR', 'woocommerce-arabic-currencies' );
	  break;
			case 'SAR': $currency_symbol = __( 'SAR', 'woocommerce-arabic-currencies' );
	  break;
		}// End switch().
		return $currency_symbol;
	}

	/**
	 * Load Arabic Currencies plugin translation
	 */
	add_action( 'plugins_loaded', 'woocommerce_arabic_currencies_translation' );

	/**
	 * Load plugin textdomain.
	 */
	function woocommerce_arabic_currencies_translation() {

		load_plugin_textdomain( 'woocommerce-arabic-currencies', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

	}
} // End if().
