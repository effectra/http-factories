<?php

namespace Effectra\Http\Factory;

use Effectra\Http\Message\ServerRequest;
use Effectra\Http\Message\Uri;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * ServerRequestFactory creates instances of PSR-7 ServerRequestInterface.
 *
 * This factory implements the Psr\Http\Message\ServerRequestFactoryInterface
 * and provides a method to create ServerRequestInterface instances.
 */
class ServerRequestFactory implements ServerRequestFactoryInterface
{
    /**
     * Creates a new server request.
     *
     * @param string $method The HTTP method.
     * @param UriInterface|string $uri The URI of the request.
     * @param array $headers The request headers.
     * @param string|null $body The request body.
     * @param string $version The HTTP protocol version.
     *
     * @return ServerRequestInterface The new server request.
     */
    public function createServerRequest(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $version = '1.1'
    ): ServerRequestInterface {
        $uri = $uri instanceof UriInterface ? $uri : new Uri($uri);
        return new ServerRequest($method, $uri, $headers, $body, $version);
    }
}
