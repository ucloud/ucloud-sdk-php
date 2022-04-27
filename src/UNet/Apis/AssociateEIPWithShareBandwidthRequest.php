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

class AssociateEIPWithShareBandwidthRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AssociateEIPWithShareBandwidth"]);
        $this->markRequired("Region");
        $this->markRequired("EIPIds");
        $this->markRequired("ShareBandwidthId");
    }

    

    /**
     * Region: 地域。
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * EIPIds: 要加入共享带宽的EIP的资源Id
     *
     * @return string[]|null
     */
    public function getEIPIds(): array
    {
        return $this->get("EIPIds");
    }

    /**
     * EIPIds: 要加入共享带宽的EIP的资源Id
     *
     * @param string[] $eipIds
     */
    public function setEIPIds(array $eipIds)
    {
        $this->set("EIPIds", $eipIds);
    }

    /**
     * ShareBandwidthId: 共享带宽ID
     *
     * @return string|null
     */
    public function getShareBandwidthId(): string
    {
        return $this->get("ShareBandwidthId");
    }

    /**
     * ShareBandwidthId: 共享带宽ID
     *
     * @param string $shareBandwidthId
     */
    public function setShareBandwidthId(string $shareBandwidthId)
    {
        $this->set("ShareBandwidthId", $shareBandwidthId);
    }

    /**
     * IPVersion: 共享带宽类型，IPv4或者IPv6，不传默认IPv4
     *
     * @return string|null
     */
    public function getIPVersion(): string
    {
        return $this->get("IPVersion");
    }

    /**
     * IPVersion: 共享带宽类型，IPv4或者IPv6，不传默认IPv4
     *
     * @param string $ipVersion
     */
    public function setIPVersion(string $ipVersion)
    {
        $this->set("IPVersion", $ipVersion);
    }
}
