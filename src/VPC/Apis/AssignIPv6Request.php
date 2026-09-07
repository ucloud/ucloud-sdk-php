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

class AssignIPv6Request extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AssignIPv6"]);
        $this->markRequired("Region");
        $this->markRequired("SubnetworkId");
        $this->markRequired("ObjectId");
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
     * ObjectId: 资源短ID
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->get("ObjectId");
    }

    /**
     * ObjectId: 资源短ID
     *
     * @param string $objectId
     */
    public function setObjectId($objectId)
    {
        $this->set("ObjectId", $objectId);
    }

    /**
     * VPCId: vpc ID
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: vpc ID
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * InstanceId: 实际资源短ID--pass产品实际ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 实际资源短ID--pass产品实际ID
     *
     * @param string $instanceId
     */
    public function setInstanceId($instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }

    /**
     * InstanceType: 与InstanceID对应，实际资源大类ID--pass产品实际类型
     *
     * @return integer|null
     */
    public function getInstanceType()
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: 与InstanceID对应，实际资源大类ID--pass产品实际类型
     *
     * @param int $instanceType
     */
    public function setInstanceType($instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * Mac: 选填，资源的Mac
     *
     * @return string|null
     */
    public function getMac()
    {
        return $this->get("Mac");
    }

    /**
     * Mac: 选填，资源的Mac
     *
     * @param string $mac
     */
    public function setMac($mac)
    {
        $this->set("Mac", $mac);
    }

    /**
     * IPv6Addresses: 指定IP分配，与Count互斥
     *
     * @return string[]|null
     */
    public function getIPv6Addresses()
    {
        return $this->get("IPv6Addresses");
    }

    /**
     * IPv6Addresses: 指定IP分配，与Count互斥
     *
     * @param string[] $iPv6Addresses
     */
    public function setIPv6Addresses(array $iPv6Addresses)
    {
        $this->set("IPv6Addresses", $iPv6Addresses);
    }

    /**
     * Count: 指定数量分配，与IPv6Addresses互斥
     *
     * @return integer|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 指定数量分配，与IPv6Addresses互斥
     *
     * @param int $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * Attribute: IP属性：支持开启公网(Normal)、仅支持内网(Private)，默认Normal
     *
     * @return string|null
     */
    public function getAttribute()
    {
        return $this->get("Attribute");
    }

    /**
     * Attribute: IP属性：支持开启公网(Normal)、仅支持内网(Private)，默认Normal
     *
     * @param string $attribute
     */
    public function setAttribute($attribute)
    {
        $this->set("Attribute", $attribute);
    }

    /**
     * Segment: 指定网段分配IP
     *
     * @return string|null
     */
    public function getSegment()
    {
        return $this->get("Segment");
    }

    /**
     * Segment: 指定网段分配IP
     *
     * @param string $segment
     */
    public function setSegment($segment)
    {
        $this->set("Segment", $segment);
    }
}
