<?php

namespace BoldApps\ShopifyToolkit\Contracts;

/**
 * Interface RequestHookInterface.
 */
interface RequestHookInterface
{
    /**
     * @param \GuzzleHttp\Psr7\Request|null $request
     */
    public function beforeRequest($request);

    /**
     * @param \GuzzleHttp\Psr7\Response|null $response
     */
    public function afterRequest($response);
}
