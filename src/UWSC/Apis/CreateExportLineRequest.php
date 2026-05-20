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
namespace UCloud\UWSC\Apis;

use UCloud\Core\Request\Request;

class CreateExportLineRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateExportLine"]);
        $this->markRequired("ProjectId");
        $this->markRequired("FromRegion");
        $this->markRequired("ToRegion");
        $this->markRequired("IpType");
        $this->markRequired("CPEId");
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
     * FromRegion: 本端地域
     *
     * @return string|null
     */
    public function getFromRegion()
    {
        return $this->get("FromRegion");
    }

    /**
     * FromRegion: 本端地域
     *
     * @param string $fromRegion
     */
    public function setFromRegion($fromRegion)
    {
        $this->set("FromRegion", $fromRegion);
    }

    /**
     * ToRegion: 目标地域
     *
     * @return string|null
     */
    public function getToRegion()
    {
        return $this->get("ToRegion");
    }

    /**
     * ToRegion: 目标地域
     *
     * @param string $toRegion
     */
    public function setToRegion($toRegion)
    {
        $this->set("ToRegion", $toRegion);
    }

    /**
     * IpType: IP类型：International、BGP、Native、Resident
     *
     * @return string|null
     */
    public function getIpType()
    {
        return $this->get("IpType");
    }

    /**
     * IpType: IP类型：International、BGP、Native、Resident
     *
     * @param string $ipType
     */
    public function setIpType($ipType)
    {
        $this->set("IpType", $ipType);
    }

    /**
     * CPEId: CPE Id
     *
     * @return string|null
     */
    public function getCPEId()
    {
        return $this->get("CPEId");
    }

    /**
     * CPEId: CPE Id
     *
     * @param string $cpeId
     */
    public function setCPEId($cpeId)
    {
        $this->set("CPEId", $cpeId);
    }

    /**
     * PkgType: 套餐类型：2M-Entry、5M-Basic、10M-Enterprise
     *
     * @return string|null
     */
    public function getPkgType()
    {
        return $this->get("PkgType");
    }

    /**
     * PkgType: 套餐类型：2M-Entry、5M-Basic、10M-Enterprise
     *
     * @param string $pkgType
     */
    public function setPkgType($pkgType)
    {
        $this->set("PkgType", $pkgType);
    }

    /**
     * Bandwidth: 带宽大小
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽大小
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * Name: 资源名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 资源名称
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Tag: 业务组名称, 默认为 "Default"
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称, 默认为 "Default"
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ChargeType: 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： Year，按年付费； Month，按月付费； Dynamic，按小时付费（需开启权限）。默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认: 1。按小时购买(Dynamic)时无需此参数。 月付时，此参数传0，代表了购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
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
     * PayMode: 计费类型：fixed-bw，固定带宽；traffic，流量计费
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 计费类型：fixed-bw，固定带宽；traffic，流量计费
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * CouponId: 代金券ID。请登录用户中心查看
     *
     * @return integer|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID。请登录用户中心查看
     *
     * @param int $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
