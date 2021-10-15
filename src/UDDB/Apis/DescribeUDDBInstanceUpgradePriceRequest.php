<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UDDB\Apis;

use UCloud\Core\Request\Request;

class DescribeUDDBInstanceUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDDBInstanceUpgradePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("ProjectId");
        $this->markRequired("UDDBId");
        $this->markRequired("RouterVersion");
        $this->markRequired("RouterNodeNum");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UDDBId: UDDB实例ID
     *
     * @return string|null
     */
    public function getUDDBId()
    {
        return $this->get("UDDBId");
    }

    /**
     * UDDBId: UDDB实例ID
     *
     * @param string $uddbId
     */
    public function setUDDBId($uddbId)
    {
        $this->set("UDDBId", $uddbId);
    }

    /**
     * RouterVersion: UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5WFeelFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w；EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *
     * @return string|null
     */
    public function getRouterVersion()
    {
        return $this->get("RouterVersion");
    }

    /**
     * RouterVersion: UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5WFeelFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w；EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *
     * @param string $routerVersion
     */
    public function setRouterVersion($routerVersion)
    {
        $this->set("RouterVersion", $routerVersion);
    }

    /**
     * RouterNodeNum: 其他版本：该参数可不填；专享版：物理机节点的个数。一台物理机有2个节点
     *
     * @return integer|null
     */
    public function getRouterNodeNum()
    {
        return $this->get("RouterNodeNum");
    }

    /**
     * RouterNodeNum: 其他版本：该参数可不填；专享版：物理机节点的个数。一台物理机有2个节点
     *
     * @param int $routerNodeNum
     */
    public function setRouterNodeNum($routerNodeNum)
    {
        $this->set("RouterNodeNum", $routerNodeNum);
    }

    /**
     * DataNodeCount: 新的数据节点个数 取值必须>0.
     *
     * @return integer|null
     */
    public function getDataNodeCount()
    {
        return $this->get("DataNodeCount");
    }

    /**
     * DataNodeCount: 新的数据节点个数 取值必须>0.
     *
     * @param int $dataNodeCount
     */
    public function setDataNodeCount($dataNodeCount)
    {
        $this->set("DataNodeCount", $dataNodeCount);
    }

    /**
     * DataNodeMemory: 新的数据节点的内存配置, 单位：MB 具体数值参考UDB的内存取值.
     *
     * @return integer|null
     */
    public function getDataNodeMemory()
    {
        return $this->get("DataNodeMemory");
    }

    /**
     * DataNodeMemory: 新的数据节点的内存配置, 单位：MB 具体数值参考UDB的内存取值.
     *
     * @param int $dataNodeMemory
     */
    public function setDataNodeMemory($dataNodeMemory)
    {
        $this->set("DataNodeMemory", $dataNodeMemory);
    }

    /**
     * DataNodeDiskSpace: 新的数据节点的磁盘大小配置. 单位: GB 具体数值参考UDB的磁盘大小取值.
     *
     * @return integer|null
     */
    public function getDataNodeDiskSpace()
    {
        return $this->get("DataNodeDiskSpace");
    }

    /**
     * DataNodeDiskSpace: 新的数据节点的磁盘大小配置. 单位: GB 具体数值参考UDB的磁盘大小取值.
     *
     * @param int $dataNodeDiskSpace
     */
    public function setDataNodeDiskSpace($dataNodeDiskSpace)
    {
        $this->set("DataNodeDiskSpace", $dataNodeDiskSpace);
    }

    /**
     * DataNodeSlaveCount: 每个数据节点的只读实例个数, 取值必须>=0.
     *
     * @return integer|null
     */
    public function getDataNodeSlaveCount()
    {
        return $this->get("DataNodeSlaveCount");
    }

    /**
     * DataNodeSlaveCount: 每个数据节点的只读实例个数, 取值必须>=0.
     *
     * @param int $dataNodeSlaveCount
     */
    public function setDataNodeSlaveCount($dataNodeSlaveCount)
    {
        $this->set("DataNodeSlaveCount", $dataNodeSlaveCount);
    }

    /**
     * InstanceMode: 存储节点的高可用模式， 分为高可用UDB（HA）和普通UDB（Normal），如果不填， 则默认为HA
     *
     * @return string|null
     */
    public function getInstanceMode()
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: 存储节点的高可用模式， 分为高可用UDB（HA）和普通UDB（Normal），如果不填， 则默认为HA
     *
     * @param string $instanceMode
     */
    public function setInstanceMode($instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * InstanceType: 存储节点和只读实例的磁盘类型。分为：SSD磁盘（SATA_SSD）或普通磁盘(Normal)。 如果不填，则默认为SATA_SSD
     *
     * @return string|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 存储节点和只读实例的磁盘类型。分为：SSD磁盘（SATA_SSD）或普通磁盘(Normal)。 如果不填，则默认为SATA_SSD
     *
     * @param string $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }
}
