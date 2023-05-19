<?php

namespace Effectra\Http\Factory;

use Effectra\Http\Message\UploadedFile;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UploadedFileFactoryInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * UploadedFileFactory creates instances of PSR-7 UploadedFileInterface.
 *
 * This factory implements the Psr\Http\Message\UploadedFileFactoryInterface
 * and provides a method to create UploadedFileInterface instances.
 */
class UploadedFileFactory implements UploadedFileFactoryInterface
{
    /**
     * Creates a new uploaded file instance.
     *
     * @param StreamInterface $stream The stream representing the uploaded file
     * @param int|null $size The size of the uploaded file in bytes (optional)
     * @param int $error The PHP file upload error constant (optional, default: UPLOAD_ERR_OK)
     * @param string|null $clientFilename The client-provided filename (optional)
     * @param string|null $clientMediaType The client-provided media type (optional)
     * @return UploadedFileInterface The created UploadedFileInterface instance
     */
    public function createUploadedFile(StreamInterface $stream, $size = null, $error = UPLOAD_ERR_OK, $clientFilename = null, $clientMediaType = null): UploadedFileInterface
    {
        return new UploadedFile($stream, $size, $error, $clientFilename, $clientMediaType);
    }
}
