# Effectra HTTP Factory

Effectra HTTP Factory is a PHP library that provides factory classes for creating PSR-7 compliant HTTP message objects. It follows the PSR-17 standard for HTTP factories, ensuring interoperability and compatibility with other PSR-7 compliant libraries and frameworks.

## Features

- Factory classes for creating PSR-7 compliant HTTP message objects.
- Implementation of the `psr/http-factory` interfaces.
- Easy creation of HTTP messages such as requests, responses, URIs, and more.

## Requirements

- PHP 7.2 or higher

## Installation

You can install the library using [Composer](https://getcomposer.org/). Run the following command in your project directory:

```
composer require effectra/http-factory
```

## Usage

### Creating a Stream with StreamFactory

```php
use Effectra\Http\Factory\StreamFactory;

$streamFactory = new StreamFactory();
$stream = $streamFactory->createStream('Hello, world!');
```

### Creating a Request with RequestFactory

```php
use Effectra\Http\Factory\RequestFactory;

$requestFactory = new RequestFactory();
$request = $requestFactory->createRequest('GET', 'https://example.com');
```

### Creating a ServerRequest with ServerRequestFactory

```php
use Effectra\Http\Factory\ServerRequestFactory;

$serverRequestFactory = new ServerRequestFactory();
$serverRequest = $serverRequestFactory->createServerRequest('POST', '/submit-form', $_SERVER);
```

### Creating a Response with ResponseFactory

```php
use Effectra\Http\Factory\ResponseFactory;

$responseFactory = new ResponseFactory();
$response = $responseFactory->createResponse(200, 'OK');
```

### Creating a Uri with UriFactory

```php
use Effectra\Http\Factory\UriFactory;

$uriFactory = new UriFactory();
$uri = $uriFactory->createUri('https://example.com');
```

For more examples and detailed usage instructions, please refer to the documentation.

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvement, please open an issue or submit a pull request on the [GitHub repository](https://github.com/effectra/http-factory).

## License

Effectra HTTP Factory is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Thank you for using the Effectra HTTP Factory library. If you have any questions or need further assistance, feel free to reach out to us.
