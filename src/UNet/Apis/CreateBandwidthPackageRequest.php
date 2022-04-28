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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class CreateBandwidthPackageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateBandwidthPackage"]);
        $this->markRequired("Region");
        $this->markRequired("Bandwidth");
        $this->markRequired("EIPId");
        $this->markRequired("TimeRange");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Bandwidth: 带宽大小(单位Mbps), 取值范围[2,800] (最大值受地域限制)
     *
     * @return integer|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽大小(单位Mbps), 取值范围[2,800] (最大值受地域限制)
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * EIPId: 所绑定弹性IP的资源ID
     *
     * @return string|null
     */
    public function getEIPId()
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 所绑定弹性IP的资源ID
     *
     * @param string $eipId
     */
    public function setEIPId($eipId)
    {
        $this->set("EIPId", $eipId);
    }

    /**
     * TimeRange: 带宽包有效时长, 取值范围为大于0的整数, 即该带宽包在EnableTime到 EnableTime+TimeRange时间段内生效
     *
     * @return integer|null
     */
    public function getTimeRange()
    {
        return $this->get("TimeRange");
    }

    /**
     * TimeRange: 带宽包有效时长, 取值范围为大于0的整数, 即该带宽包在EnableTime到 EnableTime+TimeRange时间段内生效
     *
     * @param int $timeRange
     */
    public function setTimeRange($timeRange)
    {
        $this->set("TimeRange", $timeRange);
    }

    /**
     * EnableTime: 生效时间, 格式为 Unix timestamp, 默认为立即开通
     *
     * @return integer|null
     */
    public function getEnableTime()
    {
        return $this->get("EnableTime");
    }

    /**
     * EnableTime: 生效时间, 格式为 Unix timestamp, 默认为立即开通
     *
     * @param int $enableTime
     */
    public function setEnableTime($enableTime)
    {
        $this->set("EnableTime", $enableTime);
    }

    /**
     * CouponId: 代金券ID
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
