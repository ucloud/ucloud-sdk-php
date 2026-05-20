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
namespace UCloud\UWSC\Models;

use UCloud\Core\Response\Response;

class LineInfo extends Response
{
    

    /**
     * Name: 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ResourceId: 线路资源ID
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 线路资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * InstanceId: 线路资源ID对应的加速线路ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 线路资源ID对应的加速线路ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * Bandwidth: 带宽大小(Mbps)
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽大小(Mbps)
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * ChargeType: 付费方式(按月、按年等)
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式(按月、按年等)
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * PayMode: 计费方式(固定带宽: fixed-bw；流量计费：traffic)
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 计费方式(固定带宽: fixed-bw；流量计费：traffic)
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * FromRegion: 入口地域
     *
     * @return string|null
     */
    public function getFromRegion()
    {
        return $this->get("FromRegion");
    }

    /**
     * FromRegion: 入口地域
     *
     * @param string $fromRegion
     */
    public function setFromRegion($fromRegion)
    {
        $this->set("FromRegion", $fromRegion);
    }

    /**
     * FromRegionName: 入口地域名称
     *
     * @return string|null
     */
    public function getFromRegionName()
    {
        return $this->get("FromRegionName");
    }

    /**
     * FromRegionName: 入口地域名称
     *
     * @param string $fromRegionName
     */
    public function setFromRegionName($fromRegionName)
    {
        $this->set("FromRegionName", $fromRegionName);
    }

    /**
     * ToRegion: 出口地域
     *
     * @return string|null
     */
    public function getToRegion()
    {
        return $this->get("ToRegion");
    }

    /**
     * ToRegion: 出口地域
     *
     * @param string $toRegion
     */
    public function setToRegion($toRegion)
    {
        $this->set("ToRegion", $toRegion);
    }

    /**
     * ToRegionName: 出口地域名称
     *
     * @return string|null
     */
    public function getToRegionName()
    {
        return $this->get("ToRegionName");
    }

    /**
     * ToRegionName: 出口地域名称
     *
     * @param string $toRegionName
     */
    public function setToRegionName($toRegionName)
    {
        $this->set("ToRegionName", $toRegionName);
    }

    /**
     * IP:
     *
     * @return string[]|null
     */
    public function getIP()
    {
        return $this->get("IP");
    }

    /**
     * IP:
     *
     * @param string[] $ip
     */
    public function setIP(array $ip)
    {
        $this->set("IP", $ip);
    }

    /**
     * Status: 线路是否绑定CPE；"1"：已绑定；"0"未绑定
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 线路是否绑定CPE；"1"：已绑定；"0"未绑定
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * CPEIds: 线路绑定的CPE资源ID
     *
     * @return string[]|null
     */
    public function getCPEIds()
    {
        return $this->get("CPEIds");
    }

    /**
     * CPEIds: 线路绑定的CPE资源ID
     *
     * @param string[] $cpeIds
     */
    public function setCPEIds(array $cpeIds)
    {
        $this->set("CPEIds", $cpeIds);
    }

    /**
     * PkgType: 套餐类型
     *
     * @return string|null
     */
    public function getPkgType()
    {
        return $this->get("PkgType");
    }

    /**
     * PkgType: 套餐类型
     *
     * @param string $pkgType
     */
    public function setPkgType($pkgType)
    {
        $this->set("PkgType", $pkgType);
    }

    /**
     * IpType: IP类型
     *
     * @return string|null
     */
    public function getIpType()
    {
        return $this->get("IpType");
    }

    /**
     * IpType: IP类型
     *
     * @param string $ipType
     */
    public function setIpType($ipType)
    {
        $this->set("IpType", $ipType);
    }

    /**
     * InstanceStatus: 是否过期(normal/expire)
     *
     * @return string|null
     */
    public function getInstanceStatus()
    {
        return $this->get("InstanceStatus");
    }

    /**
     * InstanceStatus: 是否过期(normal/expire)
     *
     * @param string $instanceStatus
     */
    public function setInstanceStatus($instanceStatus)
    {
        $this->set("InstanceStatus", $instanceStatus);
    }

    /**
     * Socks:
     *
     * @return SocksInfo|null
     */
    public function getSocks()
    {
        return new SocksInfo($this->get("Socks"));
    }

    /**
     * Socks:
     *
     * @param SocksInfo $socks
     */
    public function setSocks(array $socks)
    {
        $this->set("Socks", $socks->getAll());
    }

    /**
     * Source: 源IP地址
     *
     * @return string[]|null
     */
    public function getSource()
    {
        return $this->get("Source");
    }

    /**
     * Source: 源IP地址
     *
     * @param string[] $source
     */
    public function setSource(array $source)
    {
        $this->set("Source", $source);
    }
}
