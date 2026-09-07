<?php
/**
 * Copyright 2026 UCloud Technology Co., Ltd.
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

class AddSubnetIPv6Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddSubnetIPv6"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("SubnetworkId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SubnetworkId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetworkId()
    {
        return $this->get("SubnetworkId");
    }

    /**
     * SubnetworkId: 子网ID
     *
     * @param string $subnetworkId
     */
    public function setSubnetworkId($subnetworkId)
    {
        $this->set("SubnetworkId", $subnetworkId);
    }

    /**
     * VPCId: 私有网络 ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 私有网络 ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * VPCIPv6Network: 所属VPC的IPv6网段，可选，不填默认选择一个VPC IPv6网段进行分配
     *
     * @return string|null
     */
    public function getVPCIPv6Network()
    {
        return $this->get("VPCIPv6Network");
    }

    /**
     * VPCIPv6Network: 所属VPC的IPv6网段，可选，不填默认选择一个VPC IPv6网段进行分配
     *
     * @param string $vpciPv6Network
     */
    public function setVPCIPv6Network($vpciPv6Network)
    {
        $this->set("VPCIPv6Network", $vpciPv6Network);
    }

    /**
     * IPv6Network: 指定IPv6网段
     *
     * @return string|null
     */
    public function getIPv6Network()
    {
        return $this->get("IPv6Network");
    }

    /**
     * IPv6Network: 指定IPv6网段
     *
     * @param string $iPv6Network
     */
    public function setIPv6Network($iPv6Network)
    {
        $this->set("IPv6Network", $iPv6Network);
    }

    /**
     * IPv6PrefixLength: 指定IPv6网段掩码
     *
     * @return integer|null
     */
    public function getIPv6PrefixLength()
    {
        return $this->get("IPv6PrefixLength");
    }

    /**
     * IPv6PrefixLength: 指定IPv6网段掩码
     *
     * @param int $iPv6PrefixLength
     */
    public function setIPv6PrefixLength($iPv6PrefixLength)
    {
        $this->set("IPv6PrefixLength", $iPv6PrefixLength);
    }
}
