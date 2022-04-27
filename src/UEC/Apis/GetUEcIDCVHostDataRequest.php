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

class GetUEcIDCVHostDataRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUEcIDCVHostData"]);
        $this->markRequired("NodeId");
        $this->markRequired("Type");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * NodeId: 节点资源id；n为0，1，2...
     *
     * @return string[]|null
     */
    public function getNodeId(): array
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点资源id；n为0，1，2...
     *
     * @param string[] $nodeId
     */
    public function setNodeId(array $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * Type: 监控数据类型；n为0,1,2,3,4...,9
     *
     * @return string[]|null
     */
    public function getType(): array
    {
        return $this->get("Type");
    }

    /**
     * Type: 监控数据类型；n为0,1,2,3,4...,9
     *
     * @param string[] $type
     */
    public function setType(array $type)
    {
        $this->set("Type", $type);
    }

    /**
     * BeginTime: 开始时间戳
     *
     * @return integer|null
     */
    public function getBeginTime(): int
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 开始时间戳
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 结束时间戳
     *
     * @return integer|null
     */
    public function getEndTime(): int
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 结束时间戳
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }
}
