<?php

namespace UCloud\Core\Exception;

use Exception;
use Throwable;
use UCloud\Core\Response\Response;

class UCloudException extends Exception
{
    const EXC_TYPE_RET_CODE = "RetCode";

    const EXC_TYPE_TRANSPORT = "Transport";

    const EXC_TYPE_VALIDATION = "Validation";

    const EXC_TYPE_UNKNOWN = "Unknown";

    /**
     * Exception type
     *
     * @var string
     */
    private $type;

    /**
     * Request UUID
     *
     * @var string
     */
    private $requestId;

    /**
     * Original Response
     *
     * @var Response|null
     */
    private $response;
    /**
     * UCloudException constructor.
     *
     * @param string $type
     * @param string|string $message
     * @param int|int $retCode
     * @param Throwable|null $previous
     * @param string $requestId
     * @param Response|null $response
     */
    public function __construct($type, $message = "", $retCode = 0, $previous = null, $requestId = "", $response = null)
    {
        $this->type = $type;
        $this->requestId = $requestId;
        $this->response = $response;
        parent::__construct($message, $retCode, $previous);
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get request id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Get response
     *
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}
