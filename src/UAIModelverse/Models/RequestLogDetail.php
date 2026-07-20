<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\UAIModelverse\Models;

use UCloud\Core\Response\Response;

class RequestLogDetail extends Response
{
    

    /**
     * RequestId: 请求 ID
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->get("RequestId");
    }

    /**
     * RequestId: 请求 ID
     *
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->set("RequestId", $requestId);
    }

    /**
     * TopOrganizationId: 顶级组织 ID
     *
     * @return string|null
     */
    public function getTopOrganizationId()
    {
        return $this->get("TopOrganizationId");
    }

    /**
     * TopOrganizationId: 顶级组织 ID
     *
     * @param string $topOrganizationId
     */
    public function setTopOrganizationId($topOrganizationId)
    {
        $this->set("TopOrganizationId", $topOrganizationId);
    }

    /**
     * OrganizationId: 组织 ID
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: 组织 ID
     *
     * @param string $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->set("OrganizationId", $organizationId);
    }

    /**
     * ClientIp: 客户端 IP
     *
     * @return string|null
     */
    public function getClientIp()
    {
        return $this->get("ClientIp");
    }

    /**
     * ClientIp: 客户端 IP
     *
     * @param string $clientIp
     */
    public function setClientIp($clientIp)
    {
        $this->set("ClientIp", $clientIp);
    }

    /**
     * Region: 业务地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 业务地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * StartTime: 请求开始时间，Unix 毫秒时间戳
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 请求开始时间，Unix 毫秒时间戳
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * StartTimeReadable: 请求开始时间，可读格式
     *
     * @return string|null
     */
    public function getStartTimeReadable()
    {
        return $this->get("StartTimeReadable");
    }

    /**
     * StartTimeReadable: 请求开始时间，可读格式
     *
     * @param string $startTimeReadable
     */
    public function setStartTimeReadable($startTimeReadable)
    {
        $this->set("StartTimeReadable", $startTimeReadable);
    }

    /**
     * ModelName: 模型名称
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->get("ModelName");
    }

    /**
     * ModelName: 模型名称
     *
     * @param string $modelName
     */
    public function setModelName($modelName)
    {
        $this->set("ModelName", $modelName);
    }

    /**
     * IsStream: 是否流式请求
     *
     * @return boolean|null
     */
    public function getIsStream()
    {
        return $this->get("IsStream");
    }

    /**
     * IsStream: 是否流式请求
     *
     * @param boolean $isStream
     */
    public function setIsStream($isStream)
    {
        $this->set("IsStream", $isStream);
    }

    /**
     * ApiKeyId: API Key ID
     *
     * @return string|null
     */
    public function getApiKeyId()
    {
        return $this->get("ApiKeyId");
    }

    /**
     * ApiKeyId: API Key ID
     *
     * @param string $apiKeyId
     */
    public function setApiKeyId($apiKeyId)
    {
        $this->set("ApiKeyId", $apiKeyId);
    }

    /**
     * HttpStatusCode: HTTP 状态码
     *
     * @return integer|null
     */
    public function getHttpStatusCode()
    {
        return $this->get("HttpStatusCode");
    }

    /**
     * HttpStatusCode: HTTP 状态码
     *
     * @param int $httpStatusCode
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->set("HttpStatusCode", $httpStatusCode);
    }

    /**
     * ErrorCode: 错误码
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->get("ErrorCode");
    }

    /**
     * ErrorCode: 错误码
     *
     * @param string $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->set("ErrorCode", $errorCode);
    }

    /**
     * ErrorMessage: 错误信息
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->get("ErrorMessage");
    }

    /**
     * ErrorMessage: 错误信息
     *
     * @param string $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->set("ErrorMessage", $errorMessage);
    }

    /**
     * IsSuccess: 请求是否成功
     *
     * @return boolean|null
     */
    public function getIsSuccess()
    {
        return $this->get("IsSuccess");
    }

    /**
     * IsSuccess: 请求是否成功
     *
     * @param boolean $isSuccess
     */
    public function setIsSuccess($isSuccess)
    {
        $this->set("IsSuccess", $isSuccess);
    }

    /**
     * Latency: 请求总延迟，单位毫秒
     *
     * @return integer|null
     */
    public function getLatency()
    {
        return $this->get("Latency");
    }

    /**
     * Latency: 请求总延迟，单位毫秒
     *
     * @param int $latency
     */
    public function setLatency($latency)
    {
        $this->set("Latency", $latency);
    }

    /**
     * FirstTokenLatency: 首 Token 延迟，单位毫秒
     *
     * @return integer|null
     */
    public function getFirstTokenLatency()
    {
        return $this->get("FirstTokenLatency");
    }

    /**
     * FirstTokenLatency: 首 Token 延迟，单位毫秒
     *
     * @param int $firstTokenLatency
     */
    public function setFirstTokenLatency($firstTokenLatency)
    {
        $this->set("FirstTokenLatency", $firstTokenLatency);
    }

    /**
     * OutputTokenThroughput: 输出 Token 吞吐
     *
     * @return float|null
     */
    public function getOutputTokenThroughput()
    {
        return $this->get("OutputTokenThroughput");
    }

    /**
     * OutputTokenThroughput: 输出 Token 吞吐
     *
     * @param float $outputTokenThroughput
     */
    public function setOutputTokenThroughput($outputTokenThroughput)
    {
        $this->set("OutputTokenThroughput", $outputTokenThroughput);
    }

    /**
     * Usage: 模型返回的 usage 原文 JSON
     *
     * @return string|null
     */
    public function getUsage()
    {
        return $this->get("Usage");
    }

    /**
     * Usage: 模型返回的 usage 原文 JSON
     *
     * @param string $usage
     */
    public function setUsage($usage)
    {
        $this->set("Usage", $usage);
    }

    /**
     * Request: 请求原文，本期返回为空
     *
     * @return string|null
     */
    public function getRequest()
    {
        return $this->get("Request");
    }

    /**
     * Request: 请求原文，本期返回为空
     *
     * @param string $request
     */
    public function setRequest($request)
    {
        $this->set("Request", $request);
    }

    /**
     * Response: 响应原文，本期返回为空
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->get("Response");
    }

    /**
     * Response: 响应原文，本期返回为空
     *
     * @param string $response
     */
    public function setResponse($response)
    {
        $this->set("Response", $response);
    }

    /**
     * Extras: 扩展信息，本期返回为空
     *
     * @return string|null
     */
    public function getExtras()
    {
        return $this->get("Extras");
    }

    /**
     * Extras: 扩展信息，本期返回为空
     *
     * @param string $extras
     */
    public function setExtras($extras)
    {
        $this->set("Extras", $extras);
    }
}
