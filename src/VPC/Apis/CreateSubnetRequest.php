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

class CreateSubnetRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateSubnet"]);
        $this->markRequired("Region");
        $this->markRequired("VPCId");
        $this->markRequired("Subnet");
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
     * VPCId: VPC资源ID
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC资源ID
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Subnet: 子网网络地址，例如192.168.0.0
     *
     * @return string|null
     */
    public function getSubnet(): string
    {
        return $this->get("Subnet");
    }

    /**
     * Subnet: 子网网络地址，例如192.168.0.0
     *
     * @param string $subnet
     */
    public function setSubnet(string $subnet)
    {
        $this->set("Subnet", $subnet);
    }

    /**
     * Netmask: 子网网络号位数，默认为24
     *
     * @return integer|null
     */
    public function getNetmask(): int
    {
        return $this->get("Netmask");
    }

    /**
     * Netmask: 子网网络号位数，默认为24
     *
     * @param int $netmask
     */
    public function setNetmask(int $netmask)
    {
        $this->set("Netmask", $netmask);
    }

    /**
     * SubnetName: 子网名称，默认为Subnet
     *
     * @return string|null
     */
    public function getSubnetName(): string
    {
        return $this->get("SubnetName");
    }

    /**
     * SubnetName: 子网名称，默认为Subnet
     *
     * @param string $subnetName
     */
    public function setSubnetName(string $subnetName)
    {
        $this->set("SubnetName", $subnetName);
    }

    /**
     * Tag: 业务组名称，默认为Default
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称，默认为Default
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
}
