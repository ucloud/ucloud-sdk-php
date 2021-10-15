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
    private $args;

    /**
     * Request timeout
     *
     * @var int
     */
    private $timeout = 0;

    /**
     * Max retries count
     *
     * @var int
     */
    private $maxRetries = 0;

    /**
     * Required fields
     *
     * @var array
     */
    private $requiredFields = [];

    public function __construct(array $args = null)
    {
        $this->args = isset($args) ? $args : [];
    }

    /**
     * Set any field in first-level of data
     *
     * @param string $key field name
     */
    public function set($key, $value)
    {
        $this->args[$key] = $value;
    }

    /**
     * Get any field in first-level of data
     *
     * @param string $key field name
     * @return mixed
     */
    public function get($key)
    {
        return isset($this->args[$key]) ? $this->args[$key] : null;
    }

    /**
     * Check any field is exists in first-level of data
     *
     * @param string $key field name
     * @return boolean
     */
    public function has($key)
    {
        return array_key_exists($key, $this->args);
    }

    /**
     * Get action name
     *
     * @return string
     */
    public function getAction()
    {
        return $this->get(self::FIELD_ACTION);
    }

    /**
     * Set action name
     *
     * @param string $action action name
     */
    public function setAction($action)
    {
        $this->set(self::FIELD_ACTION, $action);
    }

    /**
     * Convert request object to array
     *
     * @return array
     */
    public function toArray()
    {
        return $this->encode($this->args);
    }

    /**
     * Add required field
     *
     * @param string $field
     */
    public function markRequired($field)
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
                "field "  . implode(",", $fields) . " is required",
                -1
            );
        }
    }

    /**
     * Get all data for arguments
     *
     * @return array
     */
    public function getAll()
    {
        return $this->args;
    }

    /**
     * Encode request data to one-level style
     *
     * @param array $args array of arguments
     * @return array
     */
    private static function encode(array $args)
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
    public function loadTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set timeout
     *
     * @param int $timeout timeout
     */
    public function withTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * Get max retries
     *
     * @return integer
     */
    public function loadMaxRetries()
    {
        return $this->maxRetries;
    }

    /**
     * Set max retries
     *
     * @param int $maxRetries max retries
     */
    public function withMaxRetries($maxRetries)
    {
        $this->maxRetries = $maxRetries;
    }
}
