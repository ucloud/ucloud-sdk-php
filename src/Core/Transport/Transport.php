<?php


namespace UCloud\Core\Transport;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Throwable;
use UCloud\Core\Exception\UCloudException;
use UCloud\Core\Request\Request;
use UCloud\Core\Response\Response;

class Transport implements TransportInterface
{
    const HEADER_REQUEST_ID = "X-UCLOUD-REQUEST-UUID";

    private string $baseUrl;
    private string $userAgent;
    private Client $client;

    public function __construct(string $baseUrl, string $userAgent, array $options = [])
    {
        $this->baseUrl = $baseUrl;
        $this->userAgent = $userAgent;
        $this->client = new Client($options);
    }

    /**
     * Invoke action with request object
     *
     * @param Request $req request
     * @return Response
     * @throws UCloudException
     */
    public function invoke(Request $req): Response
    {
        // do http request
        try {
            $response = $this->client->post($this->baseUrl, [
                RequestOptions::JSON => $req->toArray(),
                RequestOptions::TIMEOUT => $req->loadTimeout(),
                RequestOptions::HEADERS => [
                    "User-Agent" => $this->userAgent,
                ],
            ]);
        } catch (Throwable $e) {
            throw new UCloudException(
                UCloudException::EXC_TYPE_TRANSPORT,
                $e->getMessage(),
                -1,
                $e,
            );
        }

        // resolve http response
        $ids = $response->getHeader(self::HEADER_REQUEST_ID);
        $requestId = array_pop($ids) ?? "";
        $resp = new Response(json_decode($response->getBody(), true), $requestId);
        if ($resp->getRetCode() != 0) {
            throw new UCloudException(
                UCloudException::EXC_TYPE_RET_CODE,
                $resp->getMessage(),
                $resp->getRetCode(),
                null,
                $requestId,
            );
        }
        return $resp;
    }
}
