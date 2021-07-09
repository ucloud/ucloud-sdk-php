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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class CreatePolicyRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreatePolicy"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ULBId");
        $this->markRequired("VServerId");
        $this->markRequired("BackendId");
        $this->markRequired("Match");
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
     * ULBId: 需要添加内容转发策略的负载均衡实例ID
     *
     * @return string|null
     */
    public function getULBId(): string
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 需要添加内容转发策略的负载均衡实例ID
     *
     * @param string $ulbId
     */
    public function setULBId(string $ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * VServerId: 需要添加内容转发策略的VServer实例ID
     *
     * @return string|null
     */
    public function getVServerId(): string
    {
        return $this->get("VServerId");
    }

    /**
     * VServerId: 需要添加内容转发策略的VServer实例ID
     *
     * @param string $vServerId
     */
    public function setVServerId(string $vServerId)
    {
        $this->set("VServerId", $vServerId);
    }

    /**
     * BackendId: 内容转发策略应用的后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId
     *
     * @return string[]|null
     */
    public function getBackendId(): array
    {
        return $this->get("BackendId");
    }

    /**
     * BackendId: 内容转发策略应用的后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId
     *
     * @param string[] $backendId
     */
    public function setBackendId(array $backendId)
    {
        $this->set("BackendId", $backendId);
    }

    /**
     * Match: 内容转发匹配字段
     *
     * @return string|null
     */
    public function getMatch(): string
    {
        return $this->get("Match");
    }

    /**
     * Match: 内容转发匹配字段
     *
     * @param string $match
     */
    public function setMatch(string $match)
    {
        $this->set("Match", $match);
    }

    /**
     * Type: 内容转发匹配字段的类型
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: 内容转发匹配字段的类型
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }

    /**
     * PolicyPriority: 策略优先级，1-9999
     *
     * @return integer|null
     */
    public function getPolicyPriority(): int
    {
        return $this->get("PolicyPriority");
    }

    /**
     * PolicyPriority: 策略优先级，1-9999
     *
     * @param int $policyPriority
     */
    public function setPolicyPriority(int $policyPriority)
    {
        $this->set("PolicyPriority", $policyPriority);
    }
}
