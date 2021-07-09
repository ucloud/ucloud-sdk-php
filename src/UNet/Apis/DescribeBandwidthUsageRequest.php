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

class DescribeBandwidthUsageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeBandwidthUsage"]);
        $this->markRequired("Region");
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
     * Limit: 返回数据分页值, 取值范围为 [0,10000000] 之间的整数, 默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据分页值, 取值范围为 [0,10000000] 之间的整数, 默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * OffSet: 返回数据偏移量, 默认为0
     *
     * @return integer|null
     */
    public function getOffSet(): int
    {
        return $this->get("OffSet");
    }

    /**
     * OffSet: 返回数据偏移量, 默认为0
     *
     * @param int $offSet
     */
    public function setOffSet(int $offSet)
    {
        $this->set("OffSet", $offSet);
    }

    /**
     * EIPIds: 弹性IP的资源Id. 如果为空, 则返回当前 Region中符合条件的所有EIP的带宽用量, n为自然数
     *
     * @return string[]|null
     */
    public function getEIPIds(): array
    {
        return $this->get("EIPIds");
    }

    /**
     * EIPIds: 弹性IP的资源Id. 如果为空, 则返回当前 Region中符合条件的所有EIP的带宽用量, n为自然数
     *
     * @param string[] $eipIds
     */
    public function setEIPIds(array $eipIds)
    {
        $this->set("EIPIds", $eipIds);
    }
}
