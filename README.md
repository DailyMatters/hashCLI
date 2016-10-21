# HashCLI - PHP CLI Tool For hashing

## What is this?
HashCLI is a PHP CLI tool for hashing and verying hashes generated with the PHP `password_hash()` method. This tool was born because of a necessity to constantly having to generate new password hashes and check if old passwords hashes were correct.

### Usage ( Taken from the tool help ):

`php hashCLI.php hash [password]`: To hash the password.

`php hashCLI.php check [password] [hash]`: To check if the hash corresponds to the password.

`php hashCLI.php help`: For help.

Any other command you try to run will prompt you to the help.

## License

The MIT License (MIT)