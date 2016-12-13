<?php

namespace cr\hashcli\Tests;

use PHPUnit\Framework\TestCase;

class HashCLITest extends TestCase{

     public function testHashCli(){
        
        $expectCode = 0;

        $cmd = sprintf( "php %s/../src/hashCLI hash ", __DIR__ );
        exec( $cmd, $output, $exitCode );
        $resultString = implode( "", $output );

        $this->assertSame( $exitCode, $expectCode );
        $this->assertInternalType( "string", $resultString );

        $cmd = sprintf( "php %s/../src/hashCLI check ", __DIR__ );
        exec( $cmd, $output, $exitCode );
        $resultString = implode( "", $output );

        $this->assertSame( $exitCode, $expectCode );
        $this->assertInternalType( "string", $resultString );

        $cmd = sprintf( "php %s/../src/hashCLI help ", __DIR__ );
        exec( $cmd, $output, $exitCode );
        $resultString = implode( "", $output );

        $this->assertSame( $exitCode, $expectCode );
        $this->assertInternalType( "string", $resultString );
        
    }

    public function testHashCliVerify(){
        
        $passwd = "123456";
        $passwd = escapeshellarg( $passwd );
        $output = null;
        $expectCode = 0;
        $expectLen = 60;

        $cmd = sprintf( "php %s/../src/hashCLI hash %s", __DIR__, $passwd );

        exec( $cmd, $output, $exitCode );

        $hashString = $output[0];

        $replaceList = array( "Password", PHP_EOL, "hash", ":", " " );
        $hashString = str_replace( $replaceList, "", $hashString );
        $resultLen = strlen($hashString);
        $hashString = escapeshellarg( $hashString );

        $this->assertSame( $exitCode, $expectCode );
        $this->assertSame( $resultLen, $expectLen );

        $output = null;
        $matchString = "Password and hash match.";

        $cmd = sprintf( "php %s/../src/hashCLI check %s %s", __DIR__, $passwd, $hashString );

        exec( $cmd, $output, $exitCode );
        $resultString = $output[0];

        $this->assertSame( $exitCode, $expectCode );
        $this->assertSame( $resultString, $matchString );

        $passwd = '123456789';
        $output = null;
        $matchString = 'Password and hash do not match.';

        $cmd = sprintf( "php %s/../src/hashCLI check %s %s", __DIR__, $passwd, $hashString );

        exec( $cmd, $output, $exitCode );
        $resultString = implode( '', $output );

        $this->assertSame( $exitCode, $expectCode );
        $this->assertSame( $resultString, $matchString );
    }
}
