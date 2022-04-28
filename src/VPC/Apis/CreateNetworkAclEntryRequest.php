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

class CreateNetworkAclEntryRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateNetworkAclEntry"]);
        $this->markRequired("Region");
        $this->markRequired("AclId");
        $this->markRequired("Priority");
        $this->markRequired("Direction");
        $this->markRequired("IpProtocol");
        $this->markRequired("CidrBlock");
        $this->markRequired("PortRange");
        $this->markRequired("EntryAction");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * AclId: ACL的ID
     *
     * @return string|null
     */
    public function getAclId()
    {
        return $this->get("AclId");
    }

    /**
     * AclId: ACL的ID
     *
     * @param string $aclId
     */
    public function setAclId($aclId)
    {
        $this->set("AclId", $aclId);
    }

    /**
     * Priority: Entry的优先级，对于同样的Direction来说，不能重复
     *
     * @return integer|null
     */
    public function getPriority()
    {
        return $this->get("Priority");
    }

    /**
     * Priority: Entry的优先级，对于同样的Direction来说，不能重复
     *
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * Direction: 出向或者入向（“Ingress”, "Egress")
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->get("Direction");
    }

    /**
     * Direction: 出向或者入向（“Ingress”, "Egress")
     *
     * @param string $direction
     */
    public function setDirection($direction)
    {
        $this->set("Direction", $direction);
    }

    /**
     * IpProtocol: 协议规则描述
     *
     * @return string|null
     */
    public function getIpProtocol()
    {
        return $this->get("IpProtocol");
    }

    /**
     * IpProtocol: 协议规则描述
     *
     * @param string $ipProtocol
     */
    public function setIpProtocol($ipProtocol)
    {
        $this->set("IpProtocol", $ipProtocol);
    }

    /**
     * CidrBlock: IPv4段的CIDR表示
     *
     * @return string|null
     */
    public function getCidrBlock()
    {
        return $this->get("CidrBlock");
    }

    /**
     * CidrBlock: IPv4段的CIDR表示
     *
     * @param string $cidrBlock
     */
    public function setCidrBlock($cidrBlock)
    {
        $this->set("CidrBlock", $cidrBlock);
    }

    /**
     * PortRange: 针对的端口范围
     *
     * @return string|null
     */
    public function getPortRange()
    {
        return $this->get("PortRange");
    }

    /**
     * PortRange: 针对的端口范围
     *
     * @param string $portRange
     */
    public function setPortRange($portRange)
    {
        $this->set("PortRange", $portRange);
    }

    /**
     * EntryAction: 规则的行为("Accept", "Reject")
     *
     * @return string|null
     */
    public function getEntryAction()
    {
        return $this->get("EntryAction");
    }

    /**
     * EntryAction: 规则的行为("Accept", "Reject")
     *
     * @param string $entryAction
     */
    public function setEntryAction($entryAction)
    {
        $this->set("EntryAction", $entryAction);
    }

    /**
     * Description: 描述。长度限制为不超过32字节。
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述。长度限制为不超过32字节。
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * TargetType: 应用目标类型。0代表“子网内全部资源”，1代表“子网内指定资源”，默认为0
     *
     * @return integer|null
     */
    public function getTargetType()
    {
        return $this->get("TargetType");
    }

    /**
     * TargetType: 应用目标类型。0代表“子网内全部资源”，1代表“子网内指定资源”，默认为0
     *
     * @param int $targetType
     */
    public function setTargetType($targetType)
    {
        $this->set("TargetType", $targetType);
    }

    /**
     * TargetResourceIds: 应用目标资源列表。默认为全部资源生效。TargetType为0时不用填写该值。
     *
     * @return string[]|null
     */
    public function getTargetResourceIds()
    {
        return $this->get("TargetResourceIds");
    }

    /**
     * TargetResourceIds: 应用目标资源列表。默认为全部资源生效。TargetType为0时不用填写该值。
     *
     * @param string[] $targetResourceIds
     */
    public function setTargetResourceIds(array $targetResourceIds)
    {
        $this->set("TargetResourceIds", $targetResourceIds);
    }
}
