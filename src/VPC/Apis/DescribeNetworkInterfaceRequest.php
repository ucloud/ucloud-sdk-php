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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class DescribeNetworkInterfaceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeNetworkInterface"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
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
     * VPCId: 所属VPC
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所属子网
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所属子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * InterfaceId: 虚拟网卡ID,可指定 0~n
     *
     * @return string[]|null
     */
    public function getInterfaceId(): array
    {
        return $this->get("InterfaceId");
    }

    /**
     * InterfaceId: 虚拟网卡ID,可指定 0~n
     *
     * @param string[] $interfaceId
     */
    public function setInterfaceId(array $interfaceId)
    {
        $this->set("InterfaceId", $interfaceId);
    }

    /**
     * OnlyDefault: 若为true 只返回默认网卡默认为false
     *
     * @return boolean|null
     */
    public function getOnlyDefault(): bool
    {
        return $this->get("OnlyDefault");
    }

    /**
     * OnlyDefault: 若为true 只返回默认网卡默认为false
     *
     * @param boolean $onlyDefault
     */
    public function setOnlyDefault(bool $onlyDefault)
    {
        $this->set("OnlyDefault", $onlyDefault);
    }

    /**
     * NoRecycled: 若为true 过滤绑定在回收站主机中的网卡。默认为false。
     *
     * @return boolean|null
     */
    public function getNoRecycled(): bool
    {
        return $this->get("NoRecycled");
    }

    /**
     * NoRecycled: 若为true 过滤绑定在回收站主机中的网卡。默认为false。
     *
     * @param boolean $noRecycled
     */
    public function setNoRecycled(bool $noRecycled)
    {
        $this->set("NoRecycled", $noRecycled);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Limit: 默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Offset: 默认为0
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }
}
