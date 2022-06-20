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
namespace UCloud\UPhone\Apis;

use UCloud\Core\Request\Request;

class GetUPhonePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUPhonePrice"]);
        $this->markRequired("CityId");
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
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](#DescribeUPhoneCities)获取
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * UPhoneModelName: 云手机规格名称
     *
     * @return integer|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: 云手机规格名称
     *
     * @param int $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
    }

    /**
     * MediaBandwidth: 云手机画面带宽值，画面带宽和手机强绑定关系，必须和手机数量对应。
     *
     * @return integer|null
     */
    public function getMediaBandwidth()
    {
        return $this->get("MediaBandwidth");
    }

    /**
     * MediaBandwidth: 云手机画面带宽值，画面带宽和手机强绑定关系，必须和手机数量对应。
     *
     * @param int $mediaBandwidth
     */
    public function setMediaBandwidth($mediaBandwidth)
    {
        $this->set("MediaBandwidth", $mediaBandwidth);
    }

    /**
     * UPhoneCount: 云手机个数
     *
     * @return integer|null
     */
    public function getUPhoneCount()
    {
        return $this->get("UPhoneCount");
    }

    /**
     * UPhoneCount: 云手机个数
     *
     * @param int $uPhoneCount
     */
    public function setUPhoneCount($uPhoneCount)
    {
        $this->set("UPhoneCount", $uPhoneCount);
    }

    /**
     * ChargeType: 计费模式。枚举值为： > Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 如果不传某个枚举值，默认返回年付、月付的价格组合集。
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： > Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 如果不传某个枚举值，默认返回年付、月付的价格组合集。
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长。默认: 1。 月付时，此参数传0，代表了购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认: 1。 月付时，此参数传0，代表了购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * IpDestRegion: 购买独立IP必须此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getIpDestRegion()
    {
        return $this->get("IpDestRegion");
    }

    /**
     * IpDestRegion: 购买独立IP必须此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $ipDestRegion
     */
    public function setIpDestRegion($ipDestRegion)
    {
        $this->set("IpDestRegion", $ipDestRegion);
    }

    /**
     * INetBandwidth: 购买独立IP需要此参数，其中一个ip的带宽值。
     *
     * @return integer|null
     */
    public function getINetBandwidth()
    {
        return $this->get("INetBandwidth");
    }

    /**
     * INetBandwidth: 购买独立IP需要此参数，其中一个ip的带宽值。
     *
     * @param int $iNetBandwidth
     */
    public function setINetBandwidth($iNetBandwidth)
    {
        $this->set("INetBandwidth", $iNetBandwidth);
    }

    /**
     * IpCount: 购买独立IP需要此参数。需要的eip数量。
     *
     * @return integer|null
     */
    public function getIpCount()
    {
        return $this->get("IpCount");
    }

    /**
     * IpCount: 购买独立IP需要此参数。需要的eip数量。
     *
     * @param int $ipCount
     */
    public function setIpCount($ipCount)
    {
        $this->set("IpCount", $ipCount);
    }
}
