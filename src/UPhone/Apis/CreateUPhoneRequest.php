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

class CreateUPhoneRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUPhone"]);
        $this->markRequired("Name");
        $this->markRequired("UPhoneModelName");
        $this->markRequired("MediaBandwidth");
        $this->markRequired("ImageId");
        $this->markRequired("CityId");
        $this->markRequired("UPhoneCount");
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
     * Name: 云手机实例名称，默认：UPhone。如果同时创建多个，则增加数字后缀，如UPhone-1
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 云手机实例名称，默认：UPhone。如果同时创建多个，则增加数字后缀，如UPhone-1
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * UPhoneModelName: 云手机规格名称，不超过64个字节。可通过[查询云手机规格列表]()查询支持的云手机规格。
     *
     * @return string|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: 云手机规格名称，不超过64个字节。可通过[查询云手机规格列表]()查询支持的云手机规格。
     *
     * @param string $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
    }

    /**
     * MediaBandwidth: 云手机画面带宽，默认2M
     *
     * @return int|null
     */
    public function getMediaBandwidth()
    {
        return $this->get("MediaBandwidth");
    }

    /**
     * MediaBandwidth: 云手机画面带宽，默认2M
     *
     * @param int $mediaBandwidth
     */
    public function setMediaBandwidth($mediaBandwidth)
    {
        $this->set("MediaBandwidth", $mediaBandwidth);
    }

    /**
     * ImageId: 云手机镜像ID，不超过32个字节。可通过[查询手机镜像]()查询云手机规格对应的镜像ID。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 云手机镜像ID，不超过32个字节。可通过[查询手机镜像]()查询云手机规格对应的镜像ID。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
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
     * UPhoneCount: 创建云手机的个数
     *
     * @return int|null
     */
    public function getUPhoneCount()
    {
        return $this->get("UPhoneCount");
    }

    /**
     * UPhoneCount: 创建云手机的个数
     *
     * @param int $uPhoneCount
     */
    public function setUPhoneCount($uPhoneCount)
    {
        $this->set("UPhoneCount", $uPhoneCount);
    }

    /**
     * ChargeType: 计费模式。枚举值为： > 年 Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： > 年 Year，按年付费； > Month，按月付费； > Dynamic，按小时预付费; 默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长。默认值: 1。月付时，此参数传0，代表购买至月末。
     *
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认值: 1。月付时，此参数传0，代表购买至月末。
     *
     * @param string $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * IpDestRegion: 购买独立IP必须有此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getIpDestRegion()
    {
        return $this->get("IpDestRegion");
    }

    /**
     * IpDestRegion: 购买独立IP必须有此参数。绑定的目的地域。参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $ipDestRegion
     */
    public function setIpDestRegion($ipDestRegion)
    {
        $this->set("IpDestRegion", $ipDestRegion);
    }

    /**
     * Tag: 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组。默认：Default（Default即为未分组）。请遵照[[api:uhost-api:specification|字段规范]]设定业务组。
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * BindIp: 绑定独立IP
     *
     * @return boolean|null
     */
    public function getBindIp()
    {
        return $this->get("BindIp");
    }

    /**
     * BindIp: 绑定独立IP
     *
     * @param boolean $bindIp
     */
    public function setBindIp($bindIp)
    {
        $this->set("BindIp", $bindIp);
    }

    /**
     * Bandwidth: 独立IP带宽
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 独立IP带宽
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * IpProportion: 独立IP参数。需要独立IP的比例。eg: [4:1]->4， [3:1]->3。
     *
     * @return int|null
     */
    public function getIpProportion()
    {
        return $this->get("IpProportion");
    }

    /**
     * IpProportion: 独立IP参数。需要独立IP的比例。eg: [4:1]->4， [3:1]->3。
     *
     * @param int $ipProportion
     */
    public function setIpProportion($ipProportion)
    {
        $this->set("IpProportion", $ipProportion);
    }

    /**
     * CouponId: 云手机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看。注：代金券对带宽不适用，仅适用于云手机计费
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 云手机代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看。注：代金券对带宽不适用，仅适用于云手机计费
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }


}
