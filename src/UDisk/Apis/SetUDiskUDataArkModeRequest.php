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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Request\Request;

class SetUDiskUDataArkModeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SetUDiskUDataArkMode"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("UDiskId");
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
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UDiskId: 需要设置数据方舟的UDisk的Id
     *
     * @return string|null
     */
    public function getUDiskId(): string
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 需要设置数据方舟的UDisk的Id
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @return string|null
     */
    public function getUDataArkMode(): string
    {
        return $this->get("UDataArkMode");
    }

    /**
     * UDataArkMode: 【开启数据方舟入口已关闭】是否开启数据方舟。Yes：开启，No：不开启，默认值：No
     *
     * @param string $uDataArkMode
     */
    public function setUDataArkMode(string $uDataArkMode)
    {
        $this->set("UDataArkMode", $uDataArkMode);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
