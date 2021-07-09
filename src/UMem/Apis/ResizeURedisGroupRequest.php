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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class ResizeURedisGroupRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "ResizeURedisGroup"]);
        $this->markRequired("Region");
        $this->markRequired("GroupId");
        $this->markRequired("Size");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * GroupId: 组ID
     *
     * @return string|null
     */
    public function getGroupId(): string {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 组ID
     *
     * @param string $groupId
     */
    public function setGroupId(string $groupId) {
        $this->set("GroupId", $groupId);
    }

    /**
     * Size: 内存大小, 单位:GB (需要大于原size,且小于等于32) 目前仅支持1/2/4/8/16/32 G 六种容量规格
     *
     * @return int|null
     */
    public function getSize(): int {
        return $this->get("Size");
    }

    /**
     * Size: 内存大小, 单位:GB (需要大于原size,且小于等于32) 目前仅支持1/2/4/8/16/32 G 六种容量规格
     *
     * @param int $size
     */
    public function setSize(int $size) {
        $this->set("Size", $size);
    }

    /**
     * ChargeType: 
     *
     * @return string|null
     */
    public function getChargeType(): string {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType) {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }

    /**
     * CouponId: 代金券ID 请参考DescribeCoupon接口
     *
     * @return int|null
     */
    public function getCouponId(): int {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 代金券ID 请参考DescribeCoupon接口
     *
     * @param int $couponId
     */
    public function setCouponId(int $couponId) {
        $this->set("CouponId", $couponId);
    }


}
