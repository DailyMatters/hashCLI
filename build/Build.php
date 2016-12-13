<?php

namespace cr\hashcli;

class Build{
    
    public function buildPhar(){
        $srcRoot = __DIR__."/../src";
        $buildRoot = __DIR__."/..";
        
        $phar = new \Phar( $buildRoot . "/hashCLI.phar", \FilesystemIterator::CURRENT_AS_FILEINFO | \FilesystemIterator::KEY_AS_FILENAME, "hashCLI.phar" );
        $phar["hashCLI.php"] = file_get_contents( $srcRoot . "/hashCLI.php" );
        $phar["HashManager.php"] = file_get_contents( $srcRoot . "/HashManager.php" );

        $phar->setStub( $phar->createDefaultStub( "hashCLI.php" ) );
    }
}
