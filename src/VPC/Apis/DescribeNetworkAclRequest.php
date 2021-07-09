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

class DescribeNetworkAclRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeNetworkAcl"]);
        $this->markRequired("Region");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Offset: 列表偏移量
     *
     * @return int|null
     */
    public function getOffset(): int {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表偏移量
     *
     * @param int $offset
     */
    public function setOffset(int $offset) {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 列表获取的个数限制
     *
     * @return string|null
     */
    public function getLimit(): string {
        return $this->get("Limit");
    }

    /**
     * Limit: 列表获取的个数限制
     *
     * @param string $limit
     */
    public function setLimit(string $limit) {
        $this->set("Limit", $limit);
    }

    /**
     * VpcId: 需要获取的ACL所属的VPC的ID
     *
     * @return string|null
     */
    public function getVpcId(): string {
        return $this->get("VpcId");
    }

    /**
     * VpcId: 需要获取的ACL所属的VPC的ID
     *
     * @param string $vpcId
     */
    public function setVpcId(string $vpcId) {
        $this->set("VpcId", $vpcId);
    }


}
