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

class VPNInfo extends Response
{
    

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * PopGwId: UWAN 实例 ID
     *
     * @return string|null
     */
    public function getPopGwId()
    {
        return $this->get("PopGwId");
    }

    /**
     * PopGwId: UWAN 实例 ID
     *
     * @param string $popGwId
     */
    public function setPopGwId($popGwId)
    {
        $this->set("PopGwId", $popGwId);
    }

    /**
     * PopGwName: UWAN 资源名称
     *
     * @return string|null
     */
    public function getPopGwName()
    {
        return $this->get("PopGwName");
    }

    /**
     * PopGwName: UWAN 资源名称
     *
     * @param string $popGwName
     */
    public function setPopGwName($popGwName)
    {
        $this->set("PopGwName", $popGwName);
    }

    /**
     * VPNId: CE 网关 ID
     *
     * @return string|null
     */
    public function getVPNId()
    {
        return $this->get("VPNId");
    }

    /**
     * VPNId: CE 网关 ID
     *
     * @param string $vpnId
     */
    public function setVPNId($vpnId)
    {
        $this->set("VPNId", $vpnId);
    }

    /**
     * VPNTunnelIds: 子隧道 ID
     *
     * @return string[]|null
     */
    public function getVPNTunnelIds()
    {
        return $this->get("VPNTunnelIds");
    }

    /**
     * VPNTunnelIds: 子隧道 ID
     *
     * @param string[] $vpnTunnelIds
     */
    public function setVPNTunnelIds(array $vpnTunnelIds)
    {
        $this->set("VPNTunnelIds", $vpnTunnelIds);
    }

    /**
     * Name: CE 名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: CE 名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * PublicIp: 客户自有外网 IP
     *
     * @return string|null
     */
    public function getPublicIp()
    {
        return $this->get("PublicIp");
    }

    /**
     * PublicIp: 客户自有外网 IP
     *
     * @param string $publicIp
     */
    public function setPublicIp($publicIp)
    {
        $this->set("PublicIp", $publicIp);
    }

    /**
     * IpType: CE网关的接入方式：静态IP（Static）,动态IP（Dynamic）
     *
     * @return string|null
     */
    public function getIpType()
    {
        return $this->get("IpType");
    }

    /**
     * IpType: CE网关的接入方式：静态IP（Static）,动态IP（Dynamic）
     *
     * @param string $ipType
     */
    public function setIpType($ipType)
    {
        $this->set("IpType", $ipType);
    }

    /**
     * Status: 状态（默认为空）
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态（默认为空）
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
     * Remark: CE备注
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: CE备注
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }
}
