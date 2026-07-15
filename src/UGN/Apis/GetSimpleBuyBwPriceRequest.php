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
namespace UCloud\UGN\Apis;

use UCloud\Core\Request\Request;

class GetSimpleBuyBwPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetSimpleBuyBwPrice"]);
        $this->markRequired("ProjectId");
        $this->markRequired("RegionA");
        $this->markRequired("RegionB");
        $this->markRequired("PayMode");
        $this->markRequired("ChargeType");
        $this->markRequired("Qos");
        $this->markRequired("Path");
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
     * RegionA: 地域 A 名称
     *
     * @return string|null
     */
    public function getRegionA()
    {
        return $this->get("RegionA");
    }

    /**
     * RegionA: 地域 A 名称
     *
     * @param string $regionA
     */
    public function setRegionA($regionA)
    {
        $this->set("RegionA", $regionA);
    }

    /**
     * RegionB: 地域 B 名称
     *
     * @return string|null
     */
    public function getRegionB()
    {
        return $this->get("RegionB");
    }

    /**
     * RegionB: 地域 B 名称
     *
     * @param string $regionB
     */
    public function setRegionB($regionB)
    {
        $this->set("RegionB", $regionB);
    }

    /**
     * PayMode: 计费模式 FixedBw:固定带宽｜Max5:第五峰值｜Traffic:流量计费 固定带宽：按月/按年 Max5：后付费 流量计费：按量付费
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 计费模式 FixedBw:固定带宽｜Max5:第五峰值｜Traffic:流量计费 固定带宽：按月/按年 Max5：后付费 流量计费：按量付费
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * ChargeType: 付费方式 Month:按月｜Year:按年｜PostPay:后付费｜Count:按量
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式 Month:按月｜Year:按年｜PostPay:后付费｜Count:按量
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Qos: 服务质量 Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *
     * @return string|null
     */
    public function getQos()
    {
        return $this->get("Qos");
    }

    /**
     * Qos: 服务质量 Diamond:钻石｜Platinum:铂金｜Gold:黄金
     *
     * @param string $qos
     */
    public function setQos($qos)
    {
        $this->set("Qos", $qos);
    }

    /**
     * Path: 智能路径 Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->get("Path");
    }

    /**
     * Path: 智能路径 Delay:最低时延｜IGP:普通线路｜TCO:最低成本
     *
     * @param string $path
     */
    public function setPath($path)
    {
        $this->set("Path", $path);
    }

    /**
     * BandWidth: 购买的带宽值，默认为1
     *
     * @return integer|null
     */
    public function getBandWidth()
    {
        return $this->get("BandWidth");
    }

    /**
     * BandWidth: 购买的带宽值，默认为1
     *
     * @param int $bandWidth
     */
    public function setBandWidth($bandWidth)
    {
        $this->set("BandWidth", $bandWidth);
    }
}
