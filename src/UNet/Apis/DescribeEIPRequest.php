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
namespace UCloud\UNet\Apis;

use UCloud\Core\Request\Request;

class DescribeEIPRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeEIP"]);
        $this->markRequired("Region");
    }

    

    /**
     * Region: 地域
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * EIPIds: 弹性IP的资源ID如果为空, 则返回当前 Region中符合条件的的所有EIP
     *
     * @return string[]|null
     */
    public function getEIPIds(): array
    {
        return $this->get("EIPIds");
    }

    /**
     * EIPIds: 弹性IP的资源ID如果为空, 则返回当前 Region中符合条件的的所有EIP
     *
     * @param string[] $eipIds
     */
    public function setEIPIds(array $eipIds)
    {
        $this->set("EIPIds", $eipIds);
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 数据分页值, 默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 数据分页值, 默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * IPs: IP地址，支持通过ip查询，如果ip与EIP都传，会取并集查询
     *
     * @return string[]|null
     */
    public function getIPs(): array
    {
        return $this->get("IPs");
    }

    /**
     * IPs: IP地址，支持通过ip查询，如果ip与EIP都传，会取并集查询
     *
     * @param string[] $iPs
     */
    public function setIPs(array $iPs)
    {
        $this->set("IPs", $iPs);
    }
}
