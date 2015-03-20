<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// Class for Front End Work
class pushstate_Front extends pushstate {

	/**
	 * Constructor function
	 */
	public function __construct ( $parent ) {
		// get parent settings
		foreach( $this as $key=>$val ){
			$val = $parent->{$key}; 
			$this->{$key} = $val;
		}
	}
}