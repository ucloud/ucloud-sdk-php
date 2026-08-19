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

class POPGWInfo extends Response
{
    

    /**
     * Region: 地域信息
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域信息
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * PopGwId: 网关实例 ID
     *
     * @return string|null
     */
    public function getPopGwId()
    {
        return $this->get("PopGwId");
    }

    /**
     * PopGwId: 网关实例 ID
     *
     * @param string $popGwId
     */
    public function setPopGwId($popGwId)
    {
        $this->set("PopGwId", $popGwId);
    }

    /**
     * Name: 网关名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 网关名称
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
     * BWPackageInfo: 带宽包信息
     *
     * @return BWPackageInfo|null
     */
    public function getBWPackageInfo()
    {
        return new BWPackageInfo($this->get("BWPackageInfo"));
    }

    /**
     * BWPackageInfo: 带宽包信息
     *
     * @param BWPackageInfo $bwPackageInfo
     */
    public function setBWPackageInfo(array $bwPackageInfo)
    {
        $this->set("BWPackageInfo", $bwPackageInfo->getAll());
    }

    /**
     * UGNInfo: 云联网信息
     *
     * @return UGNInfo|null
     */
    public function getUGNInfo()
    {
        return new UGNInfo($this->get("UGNInfo"));
    }

    /**
     * UGNInfo: 云联网信息
     *
     * @param UGNInfo $ugnInfo
     */
    public function setUGNInfo(array $ugnInfo)
    {
        $this->set("UGNInfo", $ugnInfo->getAll());
    }

    /**
     * CPENum: CPE数量
     *
     * @return integer|null
     */
    public function getCPENum()
    {
        return $this->get("CPENum");
    }

    /**
     * CPENum: CPE数量
     *
     * @param int $cpeNum
     */
    public function setCPENum($cpeNum)
    {
        $this->set("CPENum", $cpeNum);
    }

    /**
     * CENum: 客户网关数量
     *
     * @return integer|null
     */
    public function getCENum()
    {
        return $this->get("CENum");
    }

    /**
     * CENum: 客户网关数量
     *
     * @param int $ceNum
     */
    public function setCENum($ceNum)
    {
        $this->set("CENum", $ceNum);
    }

    /**
     * VCPENum: VCPE 数量
     *
     * @return integer|null
     */
    public function getVCPENum()
    {
        return $this->get("VCPENum");
    }

    /**
     * VCPENum: VCPE 数量
     *
     * @param int $vcpeNum
     */
    public function setVCPENum($vcpeNum)
    {
        $this->set("VCPENum", $vcpeNum);
    }

    /**
     * VNI: 唯一标识
     *
     * @return integer|null
     */
    public function getVNI()
    {
        return $this->get("VNI");
    }

    /**
     * VNI: 唯一标识
     *
     * @param int $vni
     */
    public function setVNI($vni)
    {
        $this->set("VNI", $vni);
    }

    /**
     * DueTime: 过期时间
     *
     * @return integer|null
     */
    public function getDueTime()
    {
        return $this->get("DueTime");
    }

    /**
     * DueTime: 过期时间
     *
     * @param int $dueTime
     */
    public function setDueTime($dueTime)
    {
        $this->set("DueTime", $dueTime);
    }

    /**
     * ChargeType: 付费类型
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费类型
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Type: 规格：IPSec、SSL
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 规格：IPSec、SSL
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }
}
