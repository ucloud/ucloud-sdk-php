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

class CreateUMemSpaceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUMemSpace"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Size");
        $this->markRequired("Name");
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
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Size: 内存大小, 单位:GB, 范围[1~1024]
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 内存大小, 单位:GB, 范围[1~1024]
     *
     * @param int $size
     */
    public function setSize($size)
    {
        $this->set("Size", $size);
    }

    /**
     * Name: 空间名称,长度(6<=size<=63)
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 空间名称,长度(6<=size<=63)
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * Protocol: 协议:memcache, redis (默认redis).注意:redis无single类型
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议:memcache, redis (默认redis).注意:redis无single类型
     *
     * @param string $protocol
     */
    public function setProtocol($protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)(默认: double)
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->set("Type", $type);
    }

    /**
     * ChargeType: Year , Month, Dynamic, Trial 默认: Month
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year , Month, Dynamic, Trial 默认: Month
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长 默认: 1
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId()
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId($couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
