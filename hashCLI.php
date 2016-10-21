<?php

require_once 'HashManager.php';

switch( $argv[1] ){

	case 'hash':
		$password = $argv[2];
		$hash = HashManager::hash($password);
		echo "Password hash: $hash \n";
		break;

	case 'check':
		$password = $argv[2];
		$hash = $argv[3];

		if(HashManager::check_hash($password, $hash)){
			echo "Password and hash match.\n";
			break;
		}
		echo "Password and hash do not match.\n";
		break;

	case 'help':
	default:
		printHelp();
		break;

}

/**
 * Prints help options for the tool
 *
 * @return void
 */
function printHelp(){
	echo "\n";
	echo "Usage: \n";
	echo "php hashCLI.php hash [password]: To hash the password. \n";
	echo "php hashCLI.php check [password] [hash]: To check if the hash corresponds to the password. \n";
	echo "php hashCLI.php help: For help. \n";
}

