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

class RequestLogItem extends Response
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
     * ApiKeyName: API Key 名称
     *
     * @return string|null
     */
    public function getApiKeyName()
    {
        return $this->get("ApiKeyName");
    }

    /**
     * ApiKeyName: API Key 名称
     *
     * @param string $apiKeyName
     */
    public function setApiKeyName($apiKeyName)
    {
        $this->set("ApiKeyName", $apiKeyName);
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
     * TotalTokens: 总 Token 数
     *
     * @return integer|null
     */
    public function getTotalTokens()
    {
        return $this->get("TotalTokens");
    }

    /**
     * TotalTokens: 总 Token 数
     *
     * @param int $totalTokens
     */
    public function setTotalTokens($totalTokens)
    {
        $this->set("TotalTokens", $totalTokens);
    }

    /**
     * PromptTokens: 输入 Token 数
     *
     * @return integer|null
     */
    public function getPromptTokens()
    {
        return $this->get("PromptTokens");
    }

    /**
     * PromptTokens: 输入 Token 数
     *
     * @param int $promptTokens
     */
    public function setPromptTokens($promptTokens)
    {
        $this->set("PromptTokens", $promptTokens);
    }

    /**
     * CompletionTokens: 输出 Token 数
     *
     * @return integer|null
     */
    public function getCompletionTokens()
    {
        return $this->get("CompletionTokens");
    }

    /**
     * CompletionTokens: 输出 Token 数
     *
     * @param int $completionTokens
     */
    public function setCompletionTokens($completionTokens)
    {
        $this->set("CompletionTokens", $completionTokens);
    }

    /**
     * CacheHitTokens: 缓存命中 Token 数
     *
     * @return integer|null
     */
    public function getCacheHitTokens()
    {
        return $this->get("CacheHitTokens");
    }

    /**
     * CacheHitTokens: 缓存命中 Token 数
     *
     * @param int $cacheHitTokens
     */
    public function setCacheHitTokens($cacheHitTokens)
    {
        $this->set("CacheHitTokens", $cacheHitTokens);
    }

    /**
     * CacheCreationTokens: 缓存写入 Token 数
     *
     * @return integer|null
     */
    public function getCacheCreationTokens()
    {
        return $this->get("CacheCreationTokens");
    }

    /**
     * CacheCreationTokens: 缓存写入 Token 数
     *
     * @param int $cacheCreationTokens
     */
    public function setCacheCreationTokens($cacheCreationTokens)
    {
        $this->set("CacheCreationTokens", $cacheCreationTokens);
    }

    /**
     * CacheCreation5mTokens: 5 分钟缓存写入 Token 数
     *
     * @return integer|null
     */
    public function getCacheCreation5mTokens()
    {
        return $this->get("CacheCreation5mTokens");
    }

    /**
     * CacheCreation5mTokens: 5 分钟缓存写入 Token 数
     *
     * @param int $cacheCreation5mTokens
     */
    public function setCacheCreation5mTokens($cacheCreation5mTokens)
    {
        $this->set("CacheCreation5mTokens", $cacheCreation5mTokens);
    }

    /**
     * CacheCreation1hTokens: 1 小时缓存写入 Token 数
     *
     * @return integer|null
     */
    public function getCacheCreation1hTokens()
    {
        return $this->get("CacheCreation1hTokens");
    }

    /**
     * CacheCreation1hTokens: 1 小时缓存写入 Token 数
     *
     * @param int $cacheCreation1hTokens
     */
    public function setCacheCreation1hTokens($cacheCreation1hTokens)
    {
        $this->set("CacheCreation1hTokens", $cacheCreation1hTokens);
    }

    /**
     * HasInferenceLog: 是否存在推理日志
     *
     * @return boolean|null
     */
    public function getHasInferenceLog()
    {
        return $this->get("HasInferenceLog");
    }

    /**
     * HasInferenceLog: 是否存在推理日志
     *
     * @param boolean $hasInferenceLog
     */
    public function setHasInferenceLog($hasInferenceLog)
    {
        $this->set("HasInferenceLog", $hasInferenceLog);
    }
}
