<?php

namespace UCloud\Core\Request;

use UCloud\Core\Exception\UCloudException;

class Request implements RequestInterface
{
    const FIELD_ACTION = "Action";

    /**
     * Request arguments
     *
     * @var array
     */
    private array $args;

    /**
     * Request timeout
     *
     * @var int
     */
    private int $timeout = 0;

    /**
     * Max retries count
     *
     * @var int
     */
    private int $maxRetries = 0;

    /**
     * Required fields
     *
     * @var array
     */
    private array $requiredFields = [];

    public function __construct(array $args = null)
    {
        $this->args = $args ?? [];
    }

    /**
     * Set any field in first-level of data
     *
     * @param string $key field name
     * @param mixed $value field value
     */
    public function set(string $key, mixed $value)
    {
        $this->args[$key] = $value;
    }

    /**
     * Get any field in first-level of data
     *
     * @param string $key field name
     * @return mixed
     */
    public function get(string $key)
    {
        return $this->args[$key] ?? null;
    }

    /**
     * Check any field is exists in first-level of data
     *
     * @param string $key field name
     * @return boolean
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->args);
    }

    /**
     * Get action name
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->get(self::FIELD_ACTION);
    }

    /**
     * Set action name
     *
     * @param string $action action name
     */
    public function setAction(string $action)
    {
        $this->set(self::FIELD_ACTION, $action);
    }

    /**
     * Convert request object to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->encode($this->args);
    }

    /**
     * Add required field
     *
     * @param string $field
     */
    public function markRequired(string $field)
    {
        array_push($this->requiredFields, $field);
    }

    /**
     * Validate data
     *
     * @throws UCloudException
     */
    public function validate()
    {
        $fields = [];
        foreach ($this->requiredFields as $i => $field) {
            if ($this->get($field) != null) {
                continue;
            }
            array_push($fields, $field);
        }

        if (!empty($fields)) {
            throw new UCloudException(
                UCloudException::EXC_TYPE_VALIDATION,
                "field "  . implode(",", $fields) . " is required", -1,
            );
        }
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->args;
    }

    /**
     * Encode request data to one-level style
     *
     * @param array $args array of arguments
     * @return array
     */
    private static function encode(array $args): array
    {
        $result = [];
        foreach ($args as $key => $value) {
            if (is_array($value)) {
                $values = Request::encode($value);
                foreach ($values as $i => $v) {
                    $result[$key . '.' . $i] = $v;
                }
            } else {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    /**
     * Get timeout
     *
     * @return integer
     */
    public function loadTimeout(): int
    {
        return $this->timeout || 0;
    }

    /**
     * Set timeout
     *
     * @param int $timeout timeout
     */
    public function withTimeout(int $timeout): void
    {
        $this->timeout = $timeout;
    }

    /**
     * Get max retries
     *
     * @return integer
     */
    public function loadMaxRetries(): int
    {
        return $this->maxRetries || 0;
    }

    /**
     * Set max retries
     *
     * @param int $maxRetries max retries
     */
    public function withMaxRetries(int $maxRetries): void
    {
        $this->maxRetries = $maxRetries;
    }
}
