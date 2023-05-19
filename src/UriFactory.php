<?php

namespace Effectra\Http\Factory;

use Effectra\Http\Message\Uri;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

/**
 * UriFactory creates instances of PSR-7 UriInterface.
 *
 * This factory implements the Psr\Http\Message\UriFactoryInterface
 * and provides a method to create UriInterface instances.
 */
class UriFactory implements UriFactoryInterface
{
    /**
     * Creates a new URI instance.
     *
     * @param string $uri The URI string (optional)
     * @return UriInterface The created UriInterface instance
     */
    public function createUri(string $uri = ''): UriInterface
    {
        return new Uri($uri);
    }
}
