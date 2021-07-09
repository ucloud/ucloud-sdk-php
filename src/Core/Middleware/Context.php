<?php


namespace UCloud\Core\Middleware;

use UCloud\Core\Config\Config;
use UCloud\Core\Credential\Credential;
use UCloud\Core\Exception\UCloudException;
use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

class Context
{
    /**
     * Credential
     *
     * @var Credential
     */
    private Credential $credential;

    /**
     * Config
     *
     * @var Config
     */
    private Config $config;

    /**
     * Request
     *
     * @var Request
     */
    private Request $request;

    /**
     * Response
     *
     * @var Response
     */
    private Response $response;

    /**
     * Exception
     *
     * @var UCloudException
     */
    private UCloudException $exception;

    /**
     * Get credential
     *
     * @return Credential
     */
    public function getCredential(): Credential
    {
        return $this->credential;
    }

    /**
     * Set credential
     *
     * @param Credential $credential Credential
     */
    public function setCredential(Credential $credential): void
    {
        $this->credential = $credential;
    }

    /**
     * Get config
     *
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * Set config
     *
     * @param Config $config Config
     */
    public function setConfig(Config $config): void
    {
        $this->config = $config;
    }

    /**
     * Get request
     *
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * Set request
     *
     * @param Request $request Request
     */
    public function setRequest(Request $request): void
    {
        $this->request = $request;
    }

    /**
     * Get response
     *
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * Set response
     *
     * @param Response $response Response
     */
    public function setResponse(Response $response): void
    {
        $this->response = $response;
    }

    /**
     * Get exception
     *
     * @return UCloudException
     */
    public function getException(): UCloudException
    {
        return $this->exception;
    }

    /**
     * Set exception
     *
     * @param UCloudException $exception Exception
     */
    public function setException(UCloudException $exception): void
    {
        $this->exception = $exception;
    }
}
