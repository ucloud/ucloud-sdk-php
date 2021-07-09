<?php

namespace UCloud\Core\Config;

use Psr\Log\LoggerInterface;
use UCloud\Core\Logger\DefaultLogger;

class Config
{
    /**
     * Region
     *
     * @var string
     */
    private string $region;

    /**
     * Project id
     *
     * @var string
     */
    private string $projectId;

    /**
     * Base url
     *
     * @var string
     */
    private string $baseUrl;

    /**
     * User agent
     *
     * @var string
     */
    private string $userAgent;

    /**
     * Timeout
     *
     * @var integer
     */
    private int $timeout;

    /**
     * Max retries count
     *
     * @var integer
     */
    private int $maxRetries;

    /**
     * Logger
     *
     * @var LoggerInterface
     */
    private LoggerInterface $logger;

    /**
     * UCloud SDK
     * - region: (string) Region is the region of backend service.
     *   See also <https://docs.ucloud.cn/api/summary/regionlist> ...
     * - zone: (string) Zone is the zone of backend service
     *   See also <https://docs.ucloud.cn/api/summary/regionlist> ...
     * - projectId: (string) ProjectId is the unique identify of project, used for organize resources,
     *   Most of resources should belong to a project.
     *   Sub-Account must have an project id.
     *   See also <https://docs.ucloud.cn/api/summary/get_project_list> ...
     * - baseUrl: (string) BaseUrl is the url of backend api.
     *   See also <doc link> ...
     * - userAgent: (string) UserAgent is an attribute for sdk client, used for distinguish who is using sdk.
     *   See also https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent
     *   It will be appended to the end of sdk user-agent.
     *   eg. "Terraform/0.10.1" -> "GO/1.9.1 GO-SDK/0.1.0 Terraform/0.10.1"
     *   NOTE: it will conflict with the User-Agent of HTTPHeaders
     * - timeout: (string) Timeout is timeout for every request.
     * - maxRetries: (string) MaxRetries is the number of max retry times.
     *   Set MaxRetries more than 0 to enable auto-retry for network and service availability problem
     *   if auto-retry is enabled, it will enable default retry policy using exponential backoff.
     * - logger: (LoggerInterface) if logLevel not be set, use INFO level as default.
     *
     * @param array $args arguments
     */
    public function __construct(array $args)
    {
        $this->setRegion($args["region"] ?? "");
        $this->setProjectId($args["projectId"] ?? "");
        $this->setBaseUrl($args["baseUrl"] ?? "https://api.ucloud.cn");
        $this->setUserAgent($args["userAgent"] ?? "");
        $this->setTimeout($args["timeout"] ?? 30);
        $this->setMaxRetries($args["maxRetries"] ?? 0);
        $this->setLogger($args["logger"] ?? new DefaultLogger());
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * Set region
     *
     * @param string $region region
     */
    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    /**
     * Get project id
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * Set project id
     *
     * @param string $projectId project id
     */
    public function setProjectId(string $projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * Get base url
     *
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * Set base url
     *
     * @param string $baseUrl base url
     */
    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * Get user agent
     *
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * Set user agent
     *
     * @param string $userAgent user agent
     */
    public function setUserAgent(string $userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * Set timeout
     *
     * @param int $timeout timeout
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
    }

    /**
     * Get max retries
     *
     * @return integer
     */
    public function getMaxRetries(): int
    {
        return $this->maxRetries;
    }

    /**
     * Set max retries
     *
     * @param int $maxRetries max retries
     */
    public function setMaxRetries(int $maxRetries)
    {
        $this->maxRetries = $maxRetries;
    }

    /**
     * Get logger
     *
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * Set logger
     *
     * @param LoggerInterface $logger logger
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}
