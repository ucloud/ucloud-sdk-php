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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreateUGA3InstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUGA3Instance"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Bandwidth");
    }

    

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID,如org-xxxx。请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Bandwidth: 实例的共享带宽大小，单位Mbps
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 实例的共享带宽大小，单位Mbps
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * Name: 加速配置实例名称,默认PathX
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 加速配置实例名称,默认PathX
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * AreaCode: 非必填,如果不填，会根据Domain 和IPList 去选一个最近的源站区域BKK表示AreaCode;曼谷表示Area["BKK":"曼谷","DXB":"迪拜","FRA":"法兰克福","SGN":"胡志明市","HKG":"香港",CGK":"雅加达","LOS":"拉各斯","LHR":"伦敦","LAX":"洛杉矶","MNL":"马尼拉","DME":"莫斯科","BOM":"孟买","MSP":"圣保罗","ICN":"首尔","PVG":"上海","SIN":"新加坡","NRT":"东京","IAD":"华盛顿","TPE": "台北"]
     *
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->get("AreaCode");
    }

    /**
     * AreaCode: 非必填,如果不填，会根据Domain 和IPList 去选一个最近的源站区域BKK表示AreaCode;曼谷表示Area["BKK":"曼谷","DXB":"迪拜","FRA":"法兰克福","SGN":"胡志明市","HKG":"香港",CGK":"雅加达","LOS":"拉各斯","LHR":"伦敦","LAX":"洛杉矶","MNL":"马尼拉","DME":"莫斯科","BOM":"孟买","MSP":"圣保罗","ICN":"首尔","PVG":"上海","SIN":"新加坡","NRT":"东京","IAD":"华盛顿","TPE": "台北"]
     *
     * @param string $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->set("AreaCode", $areaCode);
    }

    /**
     * Remark: 备注项
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注项
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }

    /**
     * ChargeType: 支付方式，如按月、按年、按时[Year,Month,Dynamic]
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 支付方式，如按月、按年、按时[Year,Month,Dynamic]
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买周期
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买周期
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * AccelerationArea: 加速大区,默认Global,[    "Global":"全球",    "AP":"亚太",    "EU":"欧洲",    "ME":"中东",    "OA":"大洋洲",    "AF":"非洲",    "NA":"北美洲",    "SA":"南美洲"]
     *
     * @return string|null
     */
    public function getAccelerationArea()
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速大区,默认Global,[    "Global":"全球",    "AP":"亚太",    "EU":"欧洲",    "ME":"中东",    "OA":"大洋洲",    "AF":"非洲",    "NA":"北美洲",    "SA":"南美洲"]
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea($accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }

    /**
     * OriginIPList: 加速源IP，多个IP用英文半角逗号(,)隔开；IPList和Domain二选一必填
     *
     * @return string|null
     */
    public function getOriginIPList()
    {
        return $this->get("OriginIPList");
    }

    /**
     * OriginIPList: 加速源IP，多个IP用英文半角逗号(,)隔开；IPList和Domain二选一必填
     *
     * @param string $originIPList
     */
    public function setOriginIPList($originIPList)
    {
        $this->set("OriginIPList", $originIPList);
    }

    /**
     * OriginDomain: 加速源域名，IPList和Domain二选一必填
     *
     * @return string|null
     */
    public function getOriginDomain()
    {
        return $this->get("OriginDomain");
    }

    /**
     * OriginDomain: 加速源域名，IPList和Domain二选一必填
     *
     * @param string $originDomain
     */
    public function setOriginDomain($originDomain)
    {
        $this->set("OriginDomain", $originDomain);
    }

    /**
     * CouponId: 使用代金券可冲抵部分费用，仅全地域可用的代金券
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用代金券可冲抵部分费用，仅全地域可用的代金券
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }


}
