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
namespace UCloud\UDDB\Models;

use UCloud\Core\Response\Response;

class DataSetUDDB extends Response
{
    

    /**
     * Zone: UDDB实例对应的可用区
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: UDDB实例对应的可用区
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
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
     * Name: UDDB实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: UDDB实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * DBTypeId: UDDB的数据库版本
     *
     * @return string|null
     */
    public function getDBTypeId()
    {
        return $this->get("DBTypeId");
    }

    /**
     * DBTypeId: UDDB的数据库版本
     *
     * @param string $dbTypeId
     */
    public function setDBTypeId($dbTypeId)
    {
        $this->set("DBTypeId", $dbTypeId);
    }

    /**
     * AdminUser: 管理员帐户名，默认root
     *
     * @return string|null
     */
    public function getAdminUser()
    {
        return $this->get("AdminUser");
    }

    /**
     * AdminUser: 管理员帐户名，默认root
     *
     * @param string $adminUser
     */
    public function setAdminUser($adminUser)
    {
        $this->set("AdminUser", $adminUser);
    }

    /**
     * VirtualIP: UDDB实例访问的虚IP
     *
     * @return string|null
     */
    public function getVirtualIP()
    {
        return $this->get("VirtualIP");
    }

    /**
     * VirtualIP: UDDB实例访问的虚IP
     *
     * @param string $virtualIP
     */
    public function setVirtualIP($virtualIP)
    {
        $this->set("VirtualIP", $virtualIP);
    }

    /**
     * Port: UDDB实例访问的端口号
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: UDDB实例访问的端口号
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * State: UDDB状态, 状态列表如下: Init: 初始化中 InitFail: 初始化失败 Starting: 启动中 Running: 系统正常运行中 Abnormal: 系统运行中, 有异常, 还能提供服务 Error: 系统运行中, 但不能正常提供服务 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 UpgradingUDDB: 升降级UDDB配置中 UpgradingDataNode: 升降级UDDB节点配置中 ChangingSlaveCount: 改变只读实例数量中 ScalingOutUDDB: 水平扩展中
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: UDDB状态, 状态列表如下: Init: 初始化中 InitFail: 初始化失败 Starting: 启动中 Running: 系统正常运行中 Abnormal: 系统运行中, 有异常, 还能提供服务 Error: 系统运行中, 但不能正常提供服务 Shutdown: 关闭中 Shutoff: 已关闭 Deleted: 已删除 UpgradingUDDB: 升降级UDDB配置中 UpgradingDataNode: 升降级UDDB节点配置中 ChangingSlaveCount: 改变只读实例数量中 ScalingOutUDDB: 水平扩展中
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * CreateTime: UDDB实例创建时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: UDDB实例创建时间，采用UTC计时时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpiredTime: UDDB实例过期时间，采用UTC计时时间戳
     *
     * @return integer|null
     */
    public function getExpiredTime()
    {
        return $this->get("ExpiredTime");
    }

    /**
     * ExpiredTime: UDDB实例过期时间，采用UTC计时时间戳
     *
     * @param int $expiredTime
     */
    public function setExpiredTime($expiredTime)
    {
        $this->set("ExpiredTime", $expiredTime);
    }

    /**
     * ChargeType: 付费类型，可选值如下: Year: 按年付费 Month: 按月付费 Dynamic: 按需付费(单位: 小时) Trial: 免费试用
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费类型，可选值如下: Year: 按年付费 Month: 按月付费 Dynamic: 按需付费(单位: 小时) Trial: 免费试用
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * RouterVersion: UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *
     * @return string|null
     */
    public function getRouterVersion()
    {
        return $this->get("RouterVersion");
    }

    /**
     * RouterVersion: UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *
     * @param string $routerVersion
     */
    public function setRouterVersion($routerVersion)
    {
        $this->set("RouterVersion", $routerVersion);
    }

    /**
     * RouterNodeNum: 各版本下的节点个数。体验版： 固定为2节点； 畅享版：固定为4节点（后续可通过管理API调整）；专享版：物理机台数
     *
     * @return integer|null
     */
    public function getRouterNodeNum()
    {
        return $this->get("RouterNodeNum");
    }

    /**
     * RouterNodeNum: 各版本下的节点个数。体验版： 固定为2节点； 畅享版：固定为4节点（后续可通过管理API调整）；专享版：物理机台数
     *
     * @param int $routerNodeNum
     */
    public function setRouterNodeNum($routerNodeNum)
    {
        $this->set("RouterNodeNum", $routerNodeNum);
    }

    /**
     * RefQps: 参考QPS。 免费版： 15000； 畅享版： 30000 - 100000 （根据节点数而定）； 专享版： 节点数 * 10w qps
     *
     * @return integer|null
     */
    public function getRefQps()
    {
        return $this->get("RefQps");
    }

    /**
     * RefQps: 参考QPS。 免费版： 15000； 畅享版： 30000 - 100000 （根据节点数而定）； 专享版： 节点数 * 10w qps
     *
     * @param int $refQps
     */
    public function setRefQps($refQps)
    {
        $this->set("RefQps", $refQps);
    }

    /**
     * DataNodeCount: 数据节点个数
     *
     * @return integer|null
     */
    public function getDataNodeCount()
    {
        return $this->get("DataNodeCount");
    }

    /**
     * DataNodeCount: 数据节点个数
     *
     * @param int $dataNodeCount
     */
    public function setDataNodeCount($dataNodeCount)
    {
        $this->set("DataNodeCount", $dataNodeCount);
    }

    /**
     * DataNodeMemory: 数据节点的内存配置, 单位：MB
     *
     * @return integer|null
     */
    public function getDataNodeMemory()
    {
        return $this->get("DataNodeMemory");
    }

    /**
     * DataNodeMemory: 数据节点的内存配置, 单位：MB
     *
     * @param int $dataNodeMemory
     */
    public function setDataNodeMemory($dataNodeMemory)
    {
        $this->set("DataNodeMemory", $dataNodeMemory);
    }

    /**
     * DataNodeDiskSpace: 数据节点的磁盘大小配置. 单位: GB
     *
     * @return integer|null
     */
    public function getDataNodeDiskSpace()
    {
        return $this->get("DataNodeDiskSpace");
    }

    /**
     * DataNodeDiskSpace: 数据节点的磁盘大小配置. 单位: GB
     *
     * @param int $dataNodeDiskSpace
     */
    public function setDataNodeDiskSpace($dataNodeDiskSpace)
    {
        $this->set("DataNodeDiskSpace", $dataNodeDiskSpace);
    }

    /**
     * DataNodeSlaveCount: 每个数据节点的只读实例个数.
     *
     * @return integer|null
     */
    public function getDataNodeSlaveCount()
    {
        return $this->get("DataNodeSlaveCount");
    }

    /**
     * DataNodeSlaveCount: 每个数据节点的只读实例个数.
     *
     * @param int $dataNodeSlaveCount
     */
    public function setDataNodeSlaveCount($dataNodeSlaveCount)
    {
        $this->set("DataNodeSlaveCount", $dataNodeSlaveCount);
    }

    /**
     * DataNodeList: UDDB实例的数据节点的信息列表
     *
     * @return DataNodeInfo[]|null
     */
    public function getDataNodeList()
    {
        $items = $this->get("DataNodeList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DataNodeInfo($item));
        }
        return $result;
    }

    /**
     * DataNodeList: UDDB实例的数据节点的信息列表
     *
     * @param DataNodeInfo[] $dataNodeList
     */
    public function setDataNodeList(array $dataNodeList)
    {
        $result = [];
        foreach ($dataNodeList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
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
