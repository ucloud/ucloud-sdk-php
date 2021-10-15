<?php

namespace UCloud\Core\Response;

interface ResponseInterface
{
    /**
     * Get an array representation of response.
     *
     * @return array
     */
    public function toArray();
}
