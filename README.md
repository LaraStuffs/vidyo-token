# vidyo-token
[![Packagist Version](https://img.shields.io/packagist/v/larastuffs/vidyo-token)](https://packagist.org/packages/larastuffs/vidyo-token)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](https://github.com/LaraStuffs/vidyo-token/blob/master/LICENSE)

Generate access tokens for Vidyo.io.

> To connect to Vidyo.io, the VidyoClient SDK needs to pass a token. A token is a short-lived authentication credential that grants access to the Vidyo.io service on behalf of the developer to a specific user. When an endpoint requests access to the service, your application backend should generate a token and pass it on to the client application.

## Contents
  - [Installation and setup](#installation-and-setup)
  - [Usage](#usage)
  - [Contributing](#contributing)

## Installation and setup
You can install this package via composer using:
```bash
composer require larastuffs/vidyo-token
```

To publish the config file to `config/vidyo.php` run:
```bash
php artisan vendor:publish --provider="LaraStuffs\VidyoToken\VidyoTokenServiceProvider"
```

Go to `config/vidyo.php` and change the value of `developer_key` and `app_id` for your developer key and application ID.

## Usage
You can use the static method `LaraStuffs\VidyoToken\VidyoToken::generate(string $username = null, int $seconds = null): string` to generate the token.
If the arguments are `null`, the method gets the values defined in `config/vidyo.php`.

```php
<?php
use LaraStuffs\VidyoToken\VidyoToken;

$username = 'LaraStuffs';

echo VidyoToken::generate($username);
// Result: cHJvdmlzaW9uAExhcmFTdHVmZnNAADYzNzU5MDU0NTc0AABhOWJjMWQ2MmU5Njc4Njg3YjRhMGY5MTYwNDc1MTMxNmQ5ZGZjNmNkNTVmNDIwMTM1OTYyODBkMWVhYmE3MTVhZmZmZTQ1OGY3ZDRmYmQxZTQ4MjNlYTU0M2Y1NzVkMzc=
```

## Contributing
Contributions are more than welcome. Fork, improve and make a pull request. For bugs, ideas for improvement or other, please create an [issue](https://github.com/LaraStuffs/vidyo-token/issues).
