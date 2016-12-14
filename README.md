# HashCLI - PHP CLI Tool For hashing

[![Build Status](https://travis-ci.org/DailyMatters/hashCLI.svg?branch=master)](https://travis-ci.org/DailyMatters/hashCLI)

Special thanks to Peter Lee ( @peter279k ) for the PR.

## What is this?
HashCLI is a PHP CLI tool for hashing and verifying hashes generated with the PHP `password_hash()` method. This tool was born because of a necessity to constantly having to generate new password hashes and check if old passwords hashes were correct.

### Usage:

#### With Composer

- Run ```curl -sS https://getcomposer.org/installer | php``` to download the composer.phar
- Run ```php composer.phar require cr/hashcli``` ( ```composer require cr/hashcli:dev-master``` since this is not a stable release yet ).

```vendor/bin/hashCLI hash [password]```: To hash the password.

```vendor/bin/hashCLI check [password] [hash]```: To check if the hash corresponds to the password.

```vendor/bin/hashCLI help```: For help.

#### Without Composer

- Run ```git clone https://github.com/DailyMatters/hashCLI.git```
- Run ```php build.php``` then get the ```hashCLI.phar```

`php hashCLI.phar hash [password]`: To hash the password.

`php hashCLI.phar check [password] [hash]`: To check if the hash corresponds to the password.

`php hashCLI.phar help`: For help.

#### On Packagist

https://packagist.org/packages/cr/hashcli

## License

The MIT License (MIT)
