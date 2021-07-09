<?php

namespace UCloud\Core\Response;

class Response implements ResponseInterface
{
    /**
     * Response data
     *
     * @var array
     */
    private array $data;

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
     * @param mixed $value field value
     */
    public function set(string $key, mixed $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * Get any field in first-level of data
     *
     * @param string $key field name
     * @return mixed
     */
    public function get(string $key)
    {
        return $this->data[$key];
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getRetCode(): int
    {
        return $this->data["RetCode"] ?? 0;
    }

    public function getMessage(): string
    {
        return $this->data["Message"] ?? "";
    }

    public function getRequestId()
    {
        return $this->requestId;
    }
}
