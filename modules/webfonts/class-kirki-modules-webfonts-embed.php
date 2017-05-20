<?php
/**
 * Embeds webfonts in styles.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       3.0
 */

/**
 * Manages the way Google Fonts are enqueued.
 */
final class Kirki_Modules_Webfonts_Embed {

	/**
	 * The config ID.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var string
	 */
	protected $config_id;

	/**
	 * The Kirki_Modules_Webfonts object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $webfonts;

	/**
	 * The Kirki_Fonts_Google object.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @var object
	 */
	protected $googlefonts;

	/**
	 * The google link
	 *
	 * @access public
	 * @var string
	 */
	public $link = '';

	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 3.0
	 */
	public function __construct( $config_id, $webfonts, $googlefonts, $args = array() ) {

		$this->config_id   = $config_id;
		$this->webfonts    = $webfonts;
		$this->googlefonts = $googlefonts;

		add_filter( "kirki/{$config_id}/dynamic_css", array( $this, 'embed_css' ) );
	}

	/**
	 * Embeds the CSS from googlefonts API inside the Kirki output CSS.
	 *
	 * @access public
	 * @since 3.0.0
	 * @param string $css The original CSS.
	 * @return string     The modified CSS.
	 */
	public function embed_css( $css ) {

		// Go through our fields and populate $this->fonts.
		$this->webfonts->loop_fields();

		$this->googlefonts->fonts = apply_filters( 'kirki/enqueue_google_fonts', $this->googlefonts->fonts );

		// Goes through $this->fonts and adds or removes things as needed.
		$this->googlefonts->process_fonts();

		// Go through $this->fonts and populate $this->link.
		$link_obj = new Kirki_Modules_Webfonts_Link( $this->config_id, $this->webfonts, $this->googlefonts );
		$link_obj->create_link();
		$this->link = $link_obj->link;

		// If $this->link is not empty then enqueue it.
		if ( '' !== $this->link ) {
			return $this->get_url_contents( $this->link ) . "\n" . $css;
		}
		return $css;
	}

	/**
	 * Get the contents of a remote google-fonts link.
	 * Responses get cached for 1 day.
	 *
	 * @access protected
	 * @since 3.0.0
	 * @param string $url The link we want to get.
	 * @return string|false Returns false if there's an error.
	 */
	protected function get_url_contents( $url = '' ) {

		// If $url is not set, use $this->link.
		$url = ( '' === $url ) ? $this->link : $url;

		// Sanitize the URL.
		$url = esc_url_raw( $url );

		// The transient name.
		$transient_name = 'kirki_googlefonts_contents_' . md5( $url );

		// Get the transient value.
		$html = get_transient( $transient_name );

		// Check for transient, if none, grab remote HTML file.
		if ( false === $html ) {

			// Get remote HTML file.
			$response = wp_remote_get( $url );

			// Check for error.
			if ( is_wp_error( $response ) ) {
				set_transient( 'kirki_googlefonts_fallback_to_link', 'yes', HOUR_IN_SECONDS );
				return false;
			}

			// Parse remote HTML file.
			$data = wp_remote_retrieve_body( $response );

			// Check for error.
			if ( is_wp_error( $data ) ) {
				set_transient( 'kirki_googlefonts_fallback_to_link', 'yes', HOUR_IN_SECONDS );
				return false;
			}

			// If empty, return false.
			if ( ! $data ) {
				set_transient( 'kirki_googlefonts_fallback_to_link', 'yes', HOUR_IN_SECONDS );
				return false;
			}

			// Store remote HTML file in transient, expire after 24 hours.
			set_transient( $transient_name, $data, DAY_IN_SECONDS );
			set_transient( 'kirki_googlefonts_fallback_to_link', 'no', DAY_IN_SECONDS );
		}

		return $html;

	}
}