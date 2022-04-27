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

class UpdateNetworkAclEntryRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateNetworkAclEntry"]);
        $this->markRequired("Region");
        $this->markRequired("AclId");
        $this->markRequired("EntryId");
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
     * AclId: ACL的ID
     *
     * @return string|null
     */
    public function getAclId(): string
    {
        return $this->get("AclId");
    }

    /**
     * AclId: ACL的ID
     *
     * @param string $aclId
     */
    public function setAclId(string $aclId)
    {
        $this->set("AclId", $aclId);
    }

    /**
     * EntryId: 需要更新的Entry Id
     *
     * @return string|null
     */
    public function getEntryId(): string
    {
        return $this->get("EntryId");
    }

    /**
     * EntryId: 需要更新的Entry Id
     *
     * @param string $entryId
     */
    public function setEntryId(string $entryId)
    {
        $this->set("EntryId", $entryId);
    }

    /**
     * Priority: Entry的优先级，对于同样的Direction来说，不能重复
     *
     * @return integer|null
     */
    public function getPriority(): int
    {
        return $this->get("Priority");
    }

    /**
     * Priority: Entry的优先级，对于同样的Direction来说，不能重复
     *
     * @param int $priority
     */
    public function setPriority(int $priority)
    {
        $this->set("Priority", $priority);
    }

    /**
     * Direction: 出向或者入向（“Ingress”, "Egress")
     *
     * @return string|null
     */
    public function getDirection(): string
    {
        return $this->get("Direction");
    }

    /**
     * Direction: 出向或者入向（“Ingress”, "Egress")
     *
     * @param string $direction
     */
    public function setDirection(string $direction)
    {
        $this->set("Direction", $direction);
    }

    /**
     * IpProtocol: 针对的协议规则
     *
     * @return string|null
     */
    public function getIpProtocol(): string
    {
        return $this->get("IpProtocol");
    }

    /**
     * IpProtocol: 针对的协议规则
     *
     * @param string $ipProtocol
     */
    public function setIpProtocol(string $ipProtocol)
    {
        $this->set("IpProtocol", $ipProtocol);
    }

    /**
     * CidrBlock: IPv4段的CIDR表示
     *
     * @return string|null
     */
    public function getCidrBlock(): string
    {
        return $this->get("CidrBlock");
    }

    /**
     * CidrBlock: IPv4段的CIDR表示
     *
     * @param string $cidrBlock
     */
    public function setCidrBlock(string $cidrBlock)
    {
        $this->set("CidrBlock", $cidrBlock);
    }

    /**
     * PortRange: 针对的端口范围
     *
     * @return string|null
     */
    public function getPortRange(): string
    {
        return $this->get("PortRange");
    }

    /**
     * PortRange: 针对的端口范围
     *
     * @param string $portRange
     */
    public function setPortRange(string $portRange)
    {
        $this->set("PortRange", $portRange);
    }

    /**
     * EntryAction: 规则的行为("Accept", "Reject")
     *
     * @return string|null
     */
    public function getEntryAction(): string
    {
        return $this->get("EntryAction");
    }

    /**
     * EntryAction: 规则的行为("Accept", "Reject")
     *
     * @param string $entryAction
     */
    public function setEntryAction(string $entryAction)
    {
        $this->set("EntryAction", $entryAction);
    }

    /**
     * Description: 描述
     *
     * @return string|null
     */
    public function getDescription(): string
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->set("Description", $description);
    }

    /**
     * TargetType: 应用目标类型。0代表“子网内全部资源”， 1代表“子网内指定资源”。默认为0
     *
     * @return integer|null
     */
    public function getTargetType(): int
    {
        return $this->get("TargetType");
    }

    /**
     * TargetType: 应用目标类型。0代表“子网内全部资源”， 1代表“子网内指定资源”。默认为0
     *
     * @param int $targetType
     */
    public function setTargetType(int $targetType)
    {
        $this->set("TargetType", $targetType);
    }

    /**
     * TargetResourceIds: 应用目标资源列表。默认为全部资源生效。TargetType为0时不用填写该值
     *
     * @return string[]|null
     */
    public function getTargetResourceIds(): array
    {
        return $this->get("TargetResourceIds");
    }

    /**
     * TargetResourceIds: 应用目标资源列表。默认为全部资源生效。TargetType为0时不用填写该值
     *
     * @param string[] $targetResourceIds
     */
    public function setTargetResourceIds(array $targetResourceIds)
    {
        $this->set("TargetResourceIds", $targetResourceIds);
    }
}
