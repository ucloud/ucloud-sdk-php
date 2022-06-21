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
namespace UCloud\UDPN\Apis;

use UCloud\Core\Request\Request;

class AllocateUDPNRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AllocateUDPN"]);
        $this->markRequired("Peer1");
        $this->markRequired("Peer2");
        $this->markRequired("Bandwidth");
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
     * Peer1: 专线可用区1，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg,  洛杉矶：us-ca， 华盛顿：us-ws， 东京：jpn-tky
     *
     * @return string|null
     */
    public function getPeer1()
    {
        return $this->get("Peer1");
    }

    /**
     * Peer1: 专线可用区1，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg,  洛杉矶：us-ca， 华盛顿：us-ws， 东京：jpn-tky
     *
     * @param string $peer1
     */
    public function setPeer1($peer1)
    {
        $this->set("Peer1", $peer1);
    }

    /**
     * Peer2: 专线可用区2，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg,  洛杉矶：us-ca， 华盛顿：us-ws， 东京：jpn-tky
     *
     * @return string|null
     */
    public function getPeer2()
    {
        return $this->get("Peer2");
    }

    /**
     * Peer2: 专线可用区2，支持地域：北京二：cn-bj2, 上海二：cn-sh2, 广东：cn-gd, 亚太： hk, 上海一：cn-sh1, 法兰克福：ge-fra, 新加坡：sg,  洛杉矶：us-ca， 华盛顿：us-ws， 东京：jpn-tky
     *
     * @param string $peer2
     */
    public function setPeer2($peer2)
    {
        $this->set("Peer2", $peer2);
    }

    /**
     * Bandwidth: 带宽
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 带宽
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * ChargeType: 计费类型，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费类型，枚举值为： Year，按年付费； Month，按月付费； Dynamic，按需付费
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 计费时长，默认 1
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 计费时长，默认 1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * PayMode: 计费模式. 枚举值："Traffic", 流量计费模式; 否则 带宽计费模式；
     *
     * @return string|null
     */
    public function getPayMode()
    {
        return $this->get("PayMode");
    }

    /**
     * PayMode: 计费模式. 枚举值："Traffic", 流量计费模式; 否则 带宽计费模式；
     *
     * @param string $payMode
     */
    public function setPayMode($payMode)
    {
        $this->set("PayMode", $payMode);
    }

    /**
     * CouponId: 代金劵
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金劵
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }


}
