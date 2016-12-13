<?php

namespace cr\hashcli\Tests;

use PHPUnit\Framework\TestCase;
use cr\hashcli\Build;

class BuildTest extends TestCase{
    
    public function testBuild(){
        
        $rootFilePath = __DIR__.'/..';
        @unlink($rootFilePath);

        $build = new Build();
        $build->buildPhar();

        $pharFileExist = file_exists( $rootFilePath.'/hashCLI.phar' );

        $this->assertTrue( $pharFileExist );
    }
}
