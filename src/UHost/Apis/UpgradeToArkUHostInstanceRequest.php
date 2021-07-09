<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class UpgradeToArkUHostInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpgradeToArkUHostInstance"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("UHostIds");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * UHostIds: UHost主机的资源ID，例如UHostIds.0代表希望升级的主机1，UHostIds.1代表主机2。
     *
     * @return string[]|null
     */
    public function getUHostIds(): array
    {
        return $this->get("UHostIds");
    }

    /**
     * UHostIds: UHost主机的资源ID，例如UHostIds.0代表希望升级的主机1，UHostIds.1代表主机2。
     *
     * @param string[] $uHostIds
     */
    public function setUHostIds(array $uHostIds)
    {
        $this->set("UHostIds", $uHostIds);
    }

    /**
     * CouponId: 代金券ID 请参考DescribeCoupon接口
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID 请参考DescribeCoupon接口
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
