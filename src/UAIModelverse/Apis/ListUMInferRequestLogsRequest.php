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
namespace UCloud\UAIModelverse\Apis;

use UCloud\Core\Request\Request;

class ListUMInferRequestLogsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ListUMInferRequestLogs"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("StartTime");
        $this->markRequired("EndTime");
    }

    

    /**
     * Region: 业务地域，如 cn-wlcb。可先调用 ListUMInferRegions 获取可选地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 业务地域，如 cn-wlcb。可先调用 ListUMInferRegions 获取可选地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。请参考 [GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。请参考 [GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * StartTime: 查询开始时间，Unix 毫秒时间戳
     *
     * @return integer|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 查询开始时间，Unix 毫秒时间戳
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 查询结束时间，Unix 毫秒时间戳，必须大于等于 StartTime
     *
     * @return integer|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询结束时间，Unix 毫秒时间戳，必须大于等于 StartTime
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * ModelNames: 模型名称列表，用于过滤
     *
     * @return string[]|null
     */
    public function getModelNames()
    {
        return $this->get("ModelNames");
    }

    /**
     * ModelNames: 模型名称列表，用于过滤
     *
     * @param string[] $modelNames
     */
    public function setModelNames(array $modelNames)
    {
        $this->set("ModelNames", $modelNames);
    }

    /**
     * ApiKeyIds: API Key ID 列表，用于过滤
     *
     * @return string[]|null
     */
    public function getApiKeyIds()
    {
        return $this->get("ApiKeyIds");
    }

    /**
     * ApiKeyIds: API Key ID 列表，用于过滤
     *
     * @param string[] $apiKeyIds
     */
    public function setApiKeyIds(array $apiKeyIds)
    {
        $this->set("ApiKeyIds", $apiKeyIds);
    }

    /**
     * RequestId: 请求 ID，用于精确过滤
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->get("RequestId");
    }

    /**
     * RequestId: 请求 ID，用于精确过滤
     *
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->set("RequestId", $requestId);
    }

    /**
     * Offset: 列表偏移量，默认 0
     *
     * @return integer|null
     */
    public function getOffset()
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表偏移量，默认 0
     *
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数量，默认 20
     *
     * @return integer|null
     */
    public function getLimit()
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数量，默认 20
     *
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->set("Limit", $limit);
    }
}
