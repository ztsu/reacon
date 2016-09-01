<?php
/**
 * Copyright (c) 2013-2016 PHP Framework Interop Group
 *
 * Licensed under MIT License (@link https://github.com/php-fig/fig-standards/blob/master/LICENSE-MIT.md)
 *
 * This code is a part of PSR-15 proposal (HTTP Middleware). For more information
 * see @link https://github.com/php-fig/fig-standards/tree/master/proposed/http-middleware
 */

namespace Psr\Http\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface ServerMiddlewareInterface extends MiddlewareInterface
{
    /**
     * Process a server request and return a response.
     *
     * Takes the incoming request and optionally modifies it before delegating
     * to the next frame to get a response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $frame
     *
     * @return ResponseInterface
     */
    public function process(
        ServerRequestInterface $request,
        DelegateInterface $frame
    );
}
