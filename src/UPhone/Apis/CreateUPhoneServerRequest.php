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
use UCloud\UPhone\Params\CreateUPhoneServerParamNetworkInterface;

class CreateUPhoneServerRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUPhoneServer"]);
        $this->markRequired("Name");
        $this->markRequired("ServerModelName");
        $this->markRequired("UPhoneModelName");
        $this->markRequired("ImageId");
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
     * Name: 云手机服务器实例名称。默认：UPhone。请遵照字段规范设定实例名称。
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 云手机服务器实例名称。默认：UPhone。请遵照字段规范设定实例名称。
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ServerModelName: 云手机服务器规格名称，不超过64个字节。可通过[查询云手机服务器规格列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_server_model)查询支持的云手机服务器规格。
     *
     * @return string|null
     */
    public function getServerModelName()
    {
        return $this->get("ServerModelName");
    }

    /**
     * ServerModelName: 云手机服务器规格名称，不超过64个字节。可通过[查询云手机服务器规格列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_server_model)查询支持的云手机服务器规格。
     *
     * @param string $serverModelName
     */
    public function setServerModelName($serverModelName)
    {
        $this->set("ServerModelName", $serverModelName);
    }

    /**
     * UPhoneModelName: 云手机规格名称，不超过64个字节。可通过[查询云手机规格列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_model)查询支持的云手机规格。
     *
     * @return string|null
     */
    public function getUPhoneModelName()
    {
        return $this->get("UPhoneModelName");
    }

    /**
     * UPhoneModelName: 云手机规格名称，不超过64个字节。可通过[查询云手机规格列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_model)查询支持的云手机规格。
     *
     * @param string $uPhoneModelName
     */
    public function setUPhoneModelName($uPhoneModelName)
    {
        $this->set("UPhoneModelName", $uPhoneModelName);
    }

    /**
     * ImageId: 云手机镜像ID，不超过32个字节。可通过[查询手机镜像](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_image)查询云手机规格对应的镜像ID。
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 云手机镜像ID，不超过32个字节。可通过[查询手机镜像](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_image)查询云手机规格对应的镜像ID。
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)获取
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->get("CityId");
    }

    /**
     * CityId: 城市Id，通过[获取城市列表](https://docs.ucloud.cn/api/uphone-api/describe_u_phone_cities)获取
     *
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->set("CityId", $cityId);
    }

    /**
     * ChargeType: 计费模式。枚举值为：> 年 Year，按年付费；> Month，按月付费；> Dynamic，按小时预付费;默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为：> 年 Year，按年付费；> Month，按月付费；> Dynamic，按小时预付费;默认为月付
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
     * NetworkInterface: 
     *
     * @return CreateUPhoneServerParamNetworkInterface[]|null
     */
    public function getNetworkInterface()
    {
        $items = $this->get("NetworkInterface");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUPhoneServerParamNetworkInterface($item));
        }
        return $result;
    }

    /**
     * NetworkInterface: 
     *
     * @param CreateUPhoneServerParamNetworkInterface[] $networkInterface
     */
    public function setNetworkInterface(array $networkInterface)
    {
        $result = [];
        foreach ($networkInterface as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
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
     * ShareBandwidth: 独立IP参数。共享带宽值大小。传此参数需要和IpProportion同时传。
     *
     * @return int|null
     */
    public function getShareBandwidth()
    {
        return $this->get("ShareBandwidth");
    }

    /**
     * ShareBandwidth: 独立IP参数。共享带宽值大小。传此参数需要和IpProportion同时传。
     *
     * @param int $shareBandwidth
     */
    public function setShareBandwidth($shareBandwidth)
    {
        $this->set("ShareBandwidth", $shareBandwidth);
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
     * CouponId: 云手机服务器代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看。注：代金券对带宽不适用，仅适用于云手机服务器计费
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 云手机服务器代金券ID。请通过DescribeCoupon接口查询，或登录用户中心查看。注：代金券对带宽不适用，仅适用于云手机服务器计费
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }


}
