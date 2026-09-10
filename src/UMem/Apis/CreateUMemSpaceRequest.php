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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class CreateUMemSpaceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUMemSpace"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Size");
        $this->markRequired("Name");
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
     * Size: 内存大小, 单位:GB, 范围[1~1024]
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 内存大小, 单位:GB, 范围[1~1024]
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Name: 空间名称,长度(6<=size<=63)
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 空间名称,长度(6<=size<=63)
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Protocol: 协议:memcache, redis (默认redis).注意:redis无single类型
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议:memcache, redis (默认redis).注意:redis无single类型
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ChargeType: Year , Month, Dynamic 默认: Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year , Month, Dynamic 默认: Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * VPCId: VPC的ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC的ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Password: URedis密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->get("Password");
    }

    /**
     * Password: URedis密码。请遵照[[api:uhost-api:specification|字段规范]]设定密码。密码需使用base64进行编码，举例如下：# echo -n Password1 | base64UGFzc3dvcmQx。
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->set("Password", $password);
    }

    /**
     * SlaveZone: 跨机房UDRedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @return string|null
     */
    public function getSlaveZone()
    {
        return $this->get("SlaveZone");
    }

    /**
     * SlaveZone: 跨机房UDRedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @param string $slaveZone
     */
    public function setSlaveZone($slaveZone)
    {
        $this->set("SlaveZone", $slaveZone);
    }

    /**
     * BlockCnt: 分片个数
     *
     * @return integer|null
     */
    public function getBlockCnt()
    {
        return $this->get("BlockCnt");
    }

    /**
     * BlockCnt: 分片个数
     *
     * @param int $blockCnt
     */
    public function setBlockCnt($blockCnt)
    {
        $this->set("BlockCnt", $blockCnt);
    }

    /**
     * ClusterMode: "RWMode"：表示创建读写分离版本;其他为创建普通版本
     *
     * @return string|null
     */
    public function getClusterMode()
    {
        return $this->get("ClusterMode");
    }

    /**
     * ClusterMode: "RWMode"：表示创建读写分离版本;其他为创建普通版本
     *
     * @param string $clusterMode
     */
    public function setClusterMode($clusterMode)
    {
        $this->set("ClusterMode", $clusterMode);
    }

    /**
     * Version: 分布式分片版本（默认版本是4.0，其他版本见DescribeUDRedisBlockVersion）
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->get("Version");
    }

    /**
     * Version: 分布式分片版本（默认版本是4.0，其他版本见DescribeUDRedisBlockVersion）
     *
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->set("Version", $version);
    }

    /**
     * HighPerformance: 是否创建性能增强性。默认为false，或者不填，填true为性能增强型。
     *
     * @return boolean|null
     */
    public function getHighPerformance()
    {
        return $this->get("HighPerformance");
    }

    /**
     * HighPerformance: 是否创建性能增强性。默认为false，或者不填，填true为性能增强型。
     *
     * @param boolean $highPerformance
     */
    public function setHighPerformance($highPerformance)
    {
        $this->set("HighPerformance", $highPerformance);
    }

    /**
     * ProxySize: 分布式代理CPU核数，不填或者传0时默认不创建代理
     *
     * @return integer|null
     */
    public function getProxySize()
    {
        return $this->get("ProxySize");
    }

    /**
     * ProxySize: 分布式代理CPU核数，不填或者传0时默认不创建代理
     *
     * @param int $proxySize
     */
    public function setProxySize($proxySize)
    {
        $this->set("ProxySize", $proxySize);
    }

    /**
     * UlbMode: 是否创建负载均衡型分布式代理，true时表示创建负载均衡型代理
     *
     * @return boolean|null
     */
    public function getUlbMode()
    {
        return $this->get("UlbMode");
    }

    /**
     * UlbMode: 是否创建负载均衡型分布式代理，true时表示创建负载均衡型代理
     *
     * @param boolean $ulbMode
     */
    public function setUlbMode($ulbMode)
    {
        $this->set("UlbMode", $ulbMode);
    }

    /**
     * Port: 分片端口, 默认为 6379
     *
     * @return integer|null
     */
    public function getPort()
    {
        return $this->get("Port");
    }

    /**
     * Port: 分片端口, 默认为 6379
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->set("Port", $port);
    }

    /**
     * ProxyPort: 代理端口, 默认为 6379
     *
     * @return integer|null
     */
    public function getProxyPort()
    {
        return $this->get("ProxyPort");
    }

    /**
     * ProxyPort: 代理端口, 默认为 6379
     *
     * @param int $proxyPort
     */
    public function setProxyPort($proxyPort)
    {
        $this->set("ProxyPort", $proxyPort);
    }

    /**
     * BackupId: 备份ID，选择从该备份新建集群
     *
     * @return string|null
     */
    public function getBackupId()
    {
        return $this->get("BackupId");
    }

    /**
     * BackupId: 备份ID，选择从该备份新建集群
     *
     * @param string $backupId
     */
    public function setBackupId($backupId)
    {
        $this->set("BackupId", $backupId);
    }

    /**
     * SpaceId: 集群ID，选择某个备份创建时，需要填写源集群ID
     *
     * @return string|null
     */
    public function getSpaceId()
    {
        return $this->get("SpaceId");
    }

    /**
     * SpaceId: 集群ID，选择某个备份创建时，需要填写源集群ID
     *
     * @param string $spaceId
     */
    public function setSpaceId($spaceId)
    {
        $this->set("SpaceId", $spaceId);
    }

    /**
     * RollbackSpaceId: 如果是通过回档创建，该实例ID不为空
     *
     * @return string|null
     */
    public function getRollbackSpaceId()
    {
        return $this->get("RollbackSpaceId");
    }

    /**
     * RollbackSpaceId: 如果是通过回档创建，该实例ID不为空
     *
     * @param string $rollbackSpaceId
     */
    public function setRollbackSpaceId($rollbackSpaceId)
    {
        $this->set("RollbackSpaceId", $rollbackSpaceId);
    }

    /**
     * RollbackTime: 要回档的时间戳
     *
     * @return integer|null
     */
    public function getRollbackTime()
    {
        return $this->get("RollbackTime");
    }

    /**
     * RollbackTime: 要回档的时间戳
     *
     * @param int $rollbackTime
     */
    public function setRollbackTime($rollbackTime)
    {
        $this->set("RollbackTime", $rollbackTime);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
