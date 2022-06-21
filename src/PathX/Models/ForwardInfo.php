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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class ForwardInfo extends Response
{
    

    /**
     * InstanceId: 加速配置ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 加速配置ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * CName: 加速域名
     *
     * @return string|null
     */
    public function getCName()
    {
        return $this->get("CName");
    }

    /**
     * CName: 加速域名
     *
     * @param string $cName
     */
    public function setCName($cName)
    {
        $this->set("CName", $cName);
    }

    /**
     * Name: 加速实例名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 加速实例名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * AccelerationArea: 加速大区代码
     *
     * @return string|null
     */
    public function getAccelerationArea()
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速大区代码
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea($accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }

    /**
     * AccelerationAreaName: 加速大区名称
     *
     * @return string|null
     */
    public function getAccelerationAreaName()
    {
        return $this->get("AccelerationAreaName");
    }

    /**
     * AccelerationAreaName: 加速大区名称
     *
     * @param string $accelerationAreaName
     */
    public function setAccelerationAreaName($accelerationAreaName)
    {
        $this->set("AccelerationAreaName", $accelerationAreaName);
    }

    /**
     * AccelerationAreaInfos: 加速节点列表
     *
     * @return AccelerationAreaInfos[]|null
     */
    public function getAccelerationAreaInfos()
    {
        $items = $this->get("AccelerationAreaInfos");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AccelerationAreaInfos($item));
        }
        return $result;
    }

    /**
     * AccelerationAreaInfos: 加速节点列表
     *
     * @param AccelerationAreaInfos[] $accelerationAreaInfos
     */
    public function setAccelerationAreaInfos(array $accelerationAreaInfos)
    {
        $result = [];
        foreach ($accelerationAreaInfos as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * EgressIpList: 回源出口IP地址
     *
     * @return OutPublicIpInfo[]|null
     */
    public function getEgressIpList()
    {
        $items = $this->get("EgressIpList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new OutPublicIpInfo($item));
        }
        return $result;
    }

    /**
     * EgressIpList: 回源出口IP地址
     *
     * @param OutPublicIpInfo[] $egressIpList
     */
    public function setEgressIpList(array $egressIpList)
    {
        $result = [];
        foreach ($egressIpList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Bandwidth: 购买的带宽值
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 购买的带宽值
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * OriginArea: 源站中文名
     *
     * @return string|null
     */
    public function getOriginArea()
    {
        return $this->get("OriginArea");
    }

    /**
     * OriginArea: 源站中文名
     *
     * @param string $originArea
     */
    public function setOriginArea($originArea)
    {
        $this->set("OriginArea", $originArea);
    }

    /**
     * OriginAreaCode: 源站AreaCode
     *
     * @return string|null
     */
    public function getOriginAreaCode()
    {
        return $this->get("OriginAreaCode");
    }

    /**
     * OriginAreaCode: 源站AreaCode
     *
     * @param string $originAreaCode
     */
    public function setOriginAreaCode($originAreaCode)
    {
        $this->set("OriginAreaCode", $originAreaCode);
    }

    /**
     * CreateTime: 资源创建时间
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 资源创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ExpireTime: 资源过期时间
     *
     * @return int|null
     */
    public function getExpireTime()
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 资源过期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime($expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * ChargeType: 计费方式
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费方式
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
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
     * PortSets: 端口列表
     *
     * @return ForwardTask[]|null
     */
    public function getPortSets()
    {
        $items = $this->get("PortSets");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new ForwardTask($item));
        }
        return $result;
    }

    /**
     * PortSets: 端口列表
     *
     * @param ForwardTask[] $portSets
     */
    public function setPortSets(array $portSets)
    {
        $result = [];
        foreach ($portSets as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * IPList: 源站IP列表，多个值由半角英文逗号相隔
     *
     * @return string[]|null
     */
    public function getIPList()
    {
        return $this->get("IPList");
    }

    /**
     * IPList: 源站IP列表，多个值由半角英文逗号相隔
     *
     * @param string[] $ipList
     */
    public function setIPList(array $ipList)
    {
        $this->set("IPList", $ipList);
    }

    /**
     * Domain: 源站域名
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->get("Domain");
    }

    /**
     * Domain: 源站域名
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->set("Domain", $domain);
    }


}
