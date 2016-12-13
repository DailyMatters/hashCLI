<?php

require 'HashManager.php';

use cr\hashcli\HashManager;

switch( $argv[1] ){

	case 'hash':
		if( !isset( $argv[2] ) ){
			printHelp();
			break;
		}

		$password = $argv[2];
		$hash = HashManager::hash( $password );
		echo "Password hash: $hash ".PHP_EOL;
		break;

	case 'check':
		if( !isset( $argv[2] ) || !isset( $argv[3] ) ){
			printHelp();
			break;
		}

		$password = $argv[2];
		$hash = $argv[3];

		if( HashManager::checkHash( $password, $hash ) ){
			echo "Password and hash match.".PHP_EOL;
			break;
		}
		echo "Password and hash do not match.".PHP_EOL;
		break;

	case 'help':
	default:
		printHelp();
		break;

}

die(0);

/**
 * Prints help options for the tool
 *
 * @return void
 */
function printHelp(){
	echo PHP_EOL;
	echo "Usage: ".PHP_EOL;
	echo "php hashCLI.php hash [password]: To hash the password. ".PHP_EOL;
	echo "php hashCLI.php check [password] [hash]: To check if the hash corresponds to the password. ".PHP_EOL;
	echo "php hashCLI.php help: For help. ".PHP_EOL;
}
