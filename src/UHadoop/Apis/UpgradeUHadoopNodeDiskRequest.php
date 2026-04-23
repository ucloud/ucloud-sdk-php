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
namespace UCloud\UHadoop\Apis;

use UCloud\Core\Request\Request;

class UpgradeUHadoopNodeDiskRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpgradeUHadoopNodeDisk"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("NodeRole");
        $this->markRequired("DataDiskSize");
        $this->markRequired("InstanceId");
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
     * NodeRole: 节点角色，值为master|core|task之一
     *
     * @return string|null
     */
    public function getNodeRole()
    {
        return $this->get("NodeRole");
    }

    /**
     * NodeRole: 节点角色，值为master|core|task之一
     *
     * @param string $nodeRole
     */
    public function setNodeRole($nodeRole)
    {
        $this->set("NodeRole", $nodeRole);
    }

    /**
     * DataDiskSize: 新的数据盘磁盘大小
     *
     * @return integer|null
     */
    public function getDataDiskSize()
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 新的数据盘磁盘大小
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize($dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
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
     * NodeNames: 节点名称集合,当NodeRole不为master时必填
     *
     * @return string[]|null
     */
    public function getNodeNames()
    {
        return $this->get("NodeNames");
    }

    /**
     * NodeNames: 节点名称集合,当NodeRole不为master时必填
     *
     * @param string[] $nodeNames
     */
    public function setNodeNames(array $nodeNames)
    {
        $this->set("NodeNames", $nodeNames);
    }

    /**
     * BootDiskSize: 系统盘磁盘大小，仅支持云盘裸金属机型（系统盘和数据盘数值同时增加、只会处理系统盘参数）
     *
     * @return integer|null
     */
    public function getBootDiskSize()
    {
        return $this->get("BootDiskSize");
    }

    /**
     * BootDiskSize: 系统盘磁盘大小，仅支持云盘裸金属机型（系统盘和数据盘数值同时增加、只会处理系统盘参数）
     *
     * @param int $bootDiskSize
     */
    public function setBootDiskSize($bootDiskSize)
    {
        $this->set("BootDiskSize", $bootDiskSize);
    }
}
