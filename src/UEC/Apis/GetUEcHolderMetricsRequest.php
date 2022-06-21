<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class GetUEcHolderMetricsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUEcHolderMetrics"]);
        $this->markRequired("PackName");
        $this->markRequired("Type");
        $this->markRequired("ResourceId");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * PackName: 容器名称
     *
     * @return string|null
     */
    public function getPackName()
    {
        return $this->get("PackName");
    }

    /**
     * PackName: 容器名称
     *
     * @param string $packName
     */
    public function setPackName($packName)
    {
        $this->set("PackName", $packName);
    }

    /**
     * Type: n为0 CPU利用率, 1内存使用率, 2网卡出带宽, 3网卡入带宽, 4网卡出包数, 5网卡入包数
     *
     * @return string[]|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: n为0 CPU利用率, 1内存使用率, 2网卡出带宽, 3网卡入带宽, 4网卡出包数, 5网卡入包数
     *
     * @param string[] $type
     */
    public function setType(array $type)
    {
        $this->set("Type", $type);
    }

    /**
     * ResourceId: 容器组资源id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 容器组资源id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * StartTime: 开始时间
     *
     * @return int|null
     */
    public function getStartTime()
    {
        return $this->get("StartTime");
    }

    /**
     * StartTime: 开始时间
     *
     * @param int $startTime
     */
    public function setStartTime($startTime)
    {
        $this->set("StartTime", $startTime);
    }

    /**
     * EndTime: 结束时间
     *
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 结束时间
     *
     * @param int $endTime
     */
    public function setEndTime($endTime)
    {
        $this->set("EndTime", $endTime);
    }


}
