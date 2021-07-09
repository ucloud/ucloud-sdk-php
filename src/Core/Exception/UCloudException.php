<?php


namespace UCloud\Core\Exception;

use Exception;
use Throwable;

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
    private string $type;

    /**
     * Request UUID
     *
     * @var string
     */
    private $requestId;

    public function __construct(string $type, string $message = "", int $retCode = 0, Throwable $previous = null, $requestId = "")
    {
        $this->type = $type;
        $this->requestId = $requestId;
        parent::__construct($message, $retCode, $previous);
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get request id
     *
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }
}
