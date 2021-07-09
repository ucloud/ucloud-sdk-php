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

class UpdateVPCNetworkRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateVPCNetwork"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("VPCId");
        $this->markRequired("Network");
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
     * VPCId: VPC的ID
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC的ID
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Network: 需要保留的VPC网段。当前仅支持删除VPC网段，添加网段请参考[AddVPCNetwork](https://docs.ucloud.cn/api/vpc2.0-api/add_vpc_network)
     *
     * @return string[]|null
     */
    public function getNetwork(): array
    {
        return $this->get("Network");
    }

    /**
     * Network: 需要保留的VPC网段。当前仅支持删除VPC网段，添加网段请参考[AddVPCNetwork](https://docs.ucloud.cn/api/vpc2.0-api/add_vpc_network)
     *
     * @param string[] $network
     */
    public function setNetwork(array $network)
    {
        $this->set("Network", $network);
    }
}
