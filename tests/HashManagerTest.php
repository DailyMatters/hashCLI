<?php

namespace cr\hashcli\Tests;

use cr\hashcli\HashManager;
use PHPUnit\Framework\TestCase;

class HashManagerTest extends TestCase{

    public function testHash(){

        $hashPasswd = HashManager::hash( "123456" );
        $resultLen = strlen( $hashPasswd );
        $expectLen = 60;

        $this->assertSame( $resultLen, $expectLen );
    }

    public function testCheckHash(){
        $passwd = "123456";
        $wrongPasswd = "123456789";
        $hashPasswd = HashManager::hash( $passwd );
        $verifyTrue = HashManager::checkHash( $passwd, $hashPasswd );
        $verifyFalse = HashManager::checkHash( $wrongPasswd, $hashPasswd );

        $this->assertTrue( $verifyTrue );
        $this->assertFalse( $verifyFalse );

    }
}
