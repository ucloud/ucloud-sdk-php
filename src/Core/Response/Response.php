<?php

namespace UCloud\Core\Response;

class Response implements ResponseInterface
{
    /**
     * Response data
     *
     * @var array
     */
    private $data;

    /**
     * Request UUID
     *
     * @var string
     */
    private $requestId;

    public function __construct(array $data, $requestId = "")
    {
        $this->data = $data;
        $this->requestId = $requestId;
    }

    /**
     * Set any field in first-level of data
     *
     * @param string $key field name
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * Get any field in first-level of data
     *
     * @param string $key field name
     * @return mixed
     */
    public function get($key)
    {
        return $this->data[$key];
    }

    public function toArray()
    {
        return $this->data;
    }

    public function getRetCode()
    {
        return isset($this->data["RetCode"]) ? $this->data["RetCode"] : 0;
    }

    public function getMessage()
    {
        return isset($this->data["Message"]) ? $this->data["Message"] : "";
    }

    public function getRequestId()
    {
        return $this->requestId;
    }
}
