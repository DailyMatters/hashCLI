<?php

namespace cr\hashcli;

class HashManager{

	/**
	 * Receives a string password and hashes it.
	 *
	 * @param string $password
	 * @return string $hash
	 */
	public static function hash( $password ){
		return password_hash( $password, PASSWORD_DEFAULT );
	}


	/**
	 * Verifies if an hash correponds to the given password
	 *
	 * @param string $password
	 * @param string $hash 
	 * @return boolean If the hash was generated from the password
	 */
	public static function checkHash( $string, $hash ){

		if( password_verify( $string, $hash ) ){
			return true;
		}
		return false;
	}

}
