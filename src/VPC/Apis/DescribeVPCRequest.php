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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class DescribeVPCRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeVPC"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
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
     * VPCIds: VPCId
     *
     * @return string[]|null
     */
    public function getVPCIds(): array {
        return $this->get("VPCIds");
    }

    /**
     * VPCIds: VPCId
     *
     * @param string[] $vpcIds
     */
    public function setVPCIds(array $vpcIds) {
        $this->set("VPCIds", $vpcIds);
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag(): string {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag(string $tag) {
        $this->set("Tag", $tag);
    }

    /**
     * Offset: 
     *
     * @return int|null
     */
    public function getOffset(): int {
        return $this->get("Offset");
    }

    /**
     * Offset: 
     *
     * @param int $offset
     */
    public function setOffset(int $offset) {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 
     *
     * @return int|null
     */
    public function getLimit(): int {
        return $this->get("Limit");
    }

    /**
     * Limit: 
     *
     * @param int $limit
     */
    public function setLimit(int $limit) {
        $this->set("Limit", $limit);
    }


}
