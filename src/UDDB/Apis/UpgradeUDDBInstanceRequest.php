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
namespace UCloud\UDDB\Apis;

use UCloud\Core\Request\Request;

class UpgradeUDDBInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpgradeUDDBInstance"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("UDDBId");
        $this->markRequired("RouterVersion");
        $this->markRequired("RouterNodeNum");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * UDDBId: UDDB实例ID
     *
     * @return string|null
     */
    public function getUDDBId(): string
    {
        return $this->get("UDDBId");
    }

    /**
     * UDDBId: UDDB实例ID
     *
     * @param string $uddbId
     */
    public function setUDDBId(string $uddbId)
    {
        $this->set("UDDBId", $uddbId);
    }

    /**
     * RouterVersion: UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *
     * @return string|null
     */
    public function getRouterVersion(): string
    {
        return $this->get("RouterVersion");
    }

    /**
     * RouterVersion: UDDB路由节点的版本。分为三种： Trival(免费版)： 2中间件节点； QPS：1.5W FellFree(标准版)： 固定为4中间件节点，后续将根据业务请求量自动扩展，最多扩展到12个节点，QPS为3w - 10w； EnjoyAlone(物理机版)：专享物理机，节点数让客户可选
     *
     * @param string $routerVersion
     */
    public function setRouterVersion(string $routerVersion)
    {
        $this->set("RouterVersion", $routerVersion);
    }

    /**
     * RouterNodeNum: 其他版本：该参数可不填；专享版：物理机台数
     *
     * @return integer|null
     */
    public function getRouterNodeNum(): int
    {
        return $this->get("RouterNodeNum");
    }

    /**
     * RouterNodeNum: 其他版本：该参数可不填；专享版：物理机台数
     *
     * @param int $routerNodeNum
     */
    public function setRouterNodeNum(int $routerNodeNum)
    {
        $this->set("RouterNodeNum", $routerNodeNum);
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
