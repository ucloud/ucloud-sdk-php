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

class CPEInfo extends Response
{
    

    /**
     * CPEId: 资源ID
     *
     * @return string|null
     */
    public function getCPEId()
    {
        return $this->get("CPEId");
    }

    /**
     * CPEId: 资源ID
     *
     * @param string $cpeId
     */
    public function setCPEId($cpeId)
    {
        $this->set("CPEId", $cpeId);
    }

    /**
     * CPEName: 资源名称
     *
     * @return string|null
     */
    public function getCPEName()
    {
        return $this->get("CPEName");
    }

    /**
     * CPEName: 资源名称
     *
     * @param string $cpeName
     */
    public function setCPEName($cpeName)
    {
        $this->set("CPEName", $cpeName);
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
     * DeviceTypeName: 设备型号
     *
     * @return string|null
     */
    public function getDeviceTypeName()
    {
        return $this->get("DeviceTypeName");
    }

    /**
     * DeviceTypeName: 设备型号
     *
     * @param string $deviceTypeName
     */
    public function setDeviceTypeName($deviceTypeName)
    {
        $this->set("DeviceTypeName", $deviceTypeName);
    }

    /**
     * Vendor: 供应商
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->get("Vendor");
    }

    /**
     * Vendor: 供应商
     *
     * @param string $vendor
     */
    public function setVendor($vendor)
    {
        $this->set("Vendor", $vendor);
    }

    /**
     * PopGwId: 绑定的UWAN资源ID
     *
     * @return string[]|null
     */
    public function getPopGwId()
    {
        return $this->get("PopGwId");
    }

    /**
     * PopGwId: 绑定的UWAN资源ID
     *
     * @param string[] $popGwId
     */
    public function setPopGwId(array $popGwId)
    {
        $this->set("PopGwId", $popGwId);
    }

    /**
     * Sn: 设备SN
     *
     * @return string|null
     */
    public function getSn()
    {
        return $this->get("Sn");
    }

    /**
     * Sn: 设备SN
     *
     * @param string $sn
     */
    public function setSn($sn)
    {
        $this->set("Sn", $sn);
    }

    /**
     * Status: 状态
     *
     * @return integer|null
     */
    public function getStatus()
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态
     *
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->set("Status", $status);
    }

    /**
     * ConfUpdateTime: 配置更新时间
     *
     * @return integer|null
     */
    public function getConfUpdateTime()
    {
        return $this->get("ConfUpdateTime");
    }

    /**
     * ConfUpdateTime: 配置更新时间
     *
     * @param int $confUpdateTime
     */
    public function setConfUpdateTime($confUpdateTime)
    {
        $this->set("ConfUpdateTime", $confUpdateTime);
    }

    /**
     * Ports: 端口
     *
     * @return string[]|null
     */
    public function getPorts()
    {
        return $this->get("Ports");
    }

    /**
     * Ports: 端口
     *
     * @param string[] $ports
     */
    public function setPorts(array $ports)
    {
        $this->set("Ports", $ports);
    }

    /**
     * LinkNum: 链路数量
     *
     * @return integer|null
     */
    public function getLinkNum()
    {
        return $this->get("LinkNum");
    }

    /**
     * LinkNum: 链路数量
     *
     * @param int $linkNum
     */
    public function setLinkNum($linkNum)
    {
        $this->set("LinkNum", $linkNum);
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
     * LineStatus: 是否与线路绑定
     *
     * @return string|null
     */
    public function getLineStatus()
    {
        return $this->get("LineStatus");
    }

    /**
     * LineStatus: 是否与线路绑定
     *
     * @param string $lineStatus
     */
    public function setLineStatus($lineStatus)
    {
        $this->set("LineStatus", $lineStatus);
    }

    /**
     * ResourceIds: 绑定的UReach线路资源ID
     *
     * @return string[]|null
     */
    public function getResourceIds()
    {
        return $this->get("ResourceIds");
    }

    /**
     * ResourceIds: 绑定的UReach线路资源ID
     *
     * @param string[] $resourceIds
     */
    public function setResourceIds(array $resourceIds)
    {
        $this->set("ResourceIds", $resourceIds);
    }

    /**
     * UseTime: 有效使用时间(天)
     *
     * @return integer|null
     */
    public function getUseTime()
    {
        return $this->get("UseTime");
    }

    /**
     * UseTime: 有效使用时间(天)
     *
     * @param int $useTime
     */
    public function setUseTime($useTime)
    {
        $this->set("UseTime", $useTime);
    }
}
