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

class CreateNATGWRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateNATGW"]);
        $this->markRequired("Region");
        $this->markRequired("NATGWName");
        $this->markRequired("EIPIds");
        $this->markRequired("FirewallId");
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
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目Id。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * NATGWName: NAT网关名称
     *
     * @return string|null
     */
    public function getNATGWName()
    {
        return $this->get("NATGWName");
    }

    /**
     * NATGWName: NAT网关名称
     *
     * @param string $natgwName
     */
    public function setNATGWName($natgwName)
    {
        $this->set("NATGWName", $natgwName);
    }

    /**
     * EIPIds: NAT网关绑定的EIPId
     *
     * @return string[]|null
     */
    public function getEIPIds()
    {
        return $this->get("EIPIds");
    }

    /**
     * EIPIds: NAT网关绑定的EIPId
     *
     * @param string[] $eipIds
     */
    public function setEIPIds(array $eipIds)
    {
        $this->set("EIPIds", $eipIds);
    }

    /**
     * FirewallId: NAT网关绑定的防火墙Id
     *
     * @return string|null
     */
    public function getFirewallId()
    {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: NAT网关绑定的防火墙Id
     *
     * @param string $firewallId
     */
    public function setFirewallId($firewallId)
    {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * SubnetworkIds: NAT网关绑定的子网Id，默认为空。
     *
     * @return string[]|null
     */
    public function getSubnetworkIds()
    {
        return $this->get("SubnetworkIds");
    }

    /**
     * SubnetworkIds: NAT网关绑定的子网Id，默认为空。
     *
     * @param string[] $subnetworkIds
     */
    public function setSubnetworkIds(array $subnetworkIds)
    {
        $this->set("SubnetworkIds", $subnetworkIds);
    }

    /**
     * VPCId: NAT网关所属的VPC Id。默认为Default VPC Id
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: NAT网关所属的VPC Id。默认为Default VPC Id
     *
     * @param string $vpcId
     */
    public function setVPCId($vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * IfOpen: 白名单开关标记。0表示关闭，1表示开启。默认为0
     *
     * @return int|null
     */
    public function getIfOpen()
    {
        return $this->get("IfOpen");
    }

    /**
     * IfOpen: 白名单开关标记。0表示关闭，1表示开启。默认为0
     *
     * @param int $ifOpen
     */
    public function setIfOpen($ifOpen)
    {
        $this->set("IfOpen", $ifOpen);
    }

    /**
     * Tag: 业务组。默认为空
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组。默认为空
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * Remark: 备注。默认为空
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 备注。默认为空
     *
     * @param string $remark
     */
    public function setRemark($remark)
    {
        $this->set("Remark", $remark);
    }


}
