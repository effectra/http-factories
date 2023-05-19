<?php

namespace Effectra\Http\Factory;

use Effectra\Http\Message\Stream;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * StreamFactory creates instances of PSR-7 StreamInterface.
 *
 * This factory implements the Psr\Http\Message\StreamFactoryInterface
 * and provides methods to create StreamInterface instances.
 */
class StreamFactory implements StreamFactoryInterface
{
    /**
     * Create a new StreamInterface instance with the given content.
     *
     * @param string $content The content of the stream (optional)
     * @return StreamInterface The created StreamInterface instance
     */
    public function createStream(string $content = ''): StreamInterface
    {
        return new Stream(fopen('data://text/plain,' . $content, 'r'));
    }
    /**
     * Create a new StreamInterface instance from a file.
     *
     * @param string $filename The file path
     * @param string $mode The mode to open the file (optional)
     * @return StreamInterface The created StreamInterface instance
     */
    public function createStreamFromFile(string $filename, string $mode = 'r'): StreamInterface
    {
        $resource = fopen($filename, $mode);
        return new Stream($resource);
    }

    /**
     * Create a new StreamInterface instance from a resource.
     *
     * @param mixed $resource The resource to create the stream from
     * @return StreamInterface The created StreamInterface instance
     */
    public function createStreamFromResource($resource): StreamInterface
    {
        return new Stream($resource);
    }
}
