<?php

class Two_Factor_Dummy extends Two_Factor_Provider {

	static function get_instance() {
		static $instance;
		$class = __CLASS__;
		if ( ! is_a( $instance, $class ) ) {
			$instance = new $class;
		}
		return $instance;
	}

	function authentication_page() {
		submit_button();
	}
	
	function validate_authentication_page() {
		return true;
	}

}