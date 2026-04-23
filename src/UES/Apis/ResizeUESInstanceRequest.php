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
namespace UCloud\UES\Apis;

use UCloud\Core\Request\Request;

class ResizeUESInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ResizeUESInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("InstanceId");
        $this->markRequired("NodeRole");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
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
     * InstanceId: 实例ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实例ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * NodeRole: 节点类型（compute、master、coordinating、kibana、dashboard）
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 节点类型（compute、master、coordinating、kibana、dashboard）
     *
     * @param string $nodeRole
     */
    public function setNodeRole($nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }

    /**
     * NodeConf: 改配节点类型，NodeDiskSize为0，基于NodeRole 进行改配
     *
     * @return string|null
     */
    public function getNodeConf()
    {
        return $this->get("NodeConf");
    }

    /**
     * NodeConf: 改配节点类型，NodeDiskSize为0，基于NodeRole 进行改配
     *
     * @param string $nodeConf
     */
    public function setNodeConf($nodeConf)
    {
        $this->set("NodeConf", $nodeConf);
    }

    /**
     * NodeDiskSize: 改配节点磁盘大小，NodeConf 为空字符串，基于NodeRole 进行改配
     *
     * @return integer|null
     */
    public function getNodeDiskSize()
    {
        return $this->get("NodeDiskSize");
    }

    /**
     * NodeDiskSize: 改配节点磁盘大小，NodeConf 为空字符串，基于NodeRole 进行改配
     *
     * @param int $nodeDiskSize
     */
    public function setNodeDiskSize($nodeDiskSize)
    {
        $this->set("NodeDiskSize", $nodeDiskSize);
    }

    /**
     * ForceResizing: 进行改配操作是否强制检查集群健康状态，默认为false
     *
     * @return boolean|null
     */
    public function getForceResizing()
    {
        return $this->get("ForceResizing");
    }

    /**
     * ForceResizing: 进行改配操作是否强制检查集群健康状态，默认为false
     *
     * @param boolean $forceResizing
     */
    public function setForceResizing($forceResizing)
    {
        $this->set("ForceResizing", $forceResizing);
    }
}
