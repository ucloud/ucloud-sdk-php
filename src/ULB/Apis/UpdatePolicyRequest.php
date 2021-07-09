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

class UpdatePolicyRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "UpdatePolicy"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ULBId");
        $this->markRequired("VServerId");
        $this->markRequired("Match");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ULBId: 需要添加内容转发策略的负载均衡实例ID
     *
     * @return string|null
     */
    public function getULBId(): string {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 需要添加内容转发策略的负载均衡实例ID
     *
     * @param string $ulbId
     */
    public function setULBId(string $ulbId) {
        $this->set("ULBId", $ulbId);
    }

    /**
     * VServerId: 需要添加内容转发策略的VServer实例ID，只支持请求代理模式下，HTTP或HTTPS协议的VServer
     *
     * @return string|null
     */
    public function getVServerId(): string {
        return $this->get("VServerId");
    }

    /**
     * VServerId: 需要添加内容转发策略的VServer实例ID，只支持请求代理模式下，HTTP或HTTPS协议的VServer
     *
     * @param string $vServerId
     */
    public function setVServerId(string $vServerId) {
        $this->set("VServerId", $vServerId);
    }

    /**
     * Match: 内容转发匹配字段
     *
     * @return string|null
     */
    public function getMatch(): string {
        return $this->get("Match");
    }

    /**
     * Match: 内容转发匹配字段
     *
     * @param string $match
     */
    public function setMatch(string $match) {
        $this->set("Match", $match);
    }

    /**
     * PolicyId: 转发规则的ID，当Type为Default时，可以不传或为空
     *
     * @return string|null
     */
    public function getPolicyId(): string {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 转发规则的ID，当Type为Default时，可以不传或为空
     *
     * @param string $policyId
     */
    public function setPolicyId(string $policyId) {
        $this->set("PolicyId", $policyId);
    }

    /**
     * BackendId: 内容转发策略应用的后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId，不传表示更新转发节点为空
     *
     * @return string[]|null
     */
    public function getBackendId(): array {
        return $this->get("BackendId");
    }

    /**
     * BackendId: 内容转发策略应用的后端资源实例的ID，来源于 AllocateBackend 返回的 BackendId，不传表示更新转发节点为空
     *
     * @param string[] $backendId
     */
    public function setBackendId(array $backendId) {
        $this->set("BackendId", $backendId);
    }

    /**
     * Type: 内容转发匹配字段的类型，枚举值：Domain -> 域名转发规则；Path -> 路径转发规则；Default -> 默认转发规则，不传默认值Domain
     *
     * @return string|null
     */
    public function getType(): string {
        return $this->get("Type");
    }

    /**
     * Type: 内容转发匹配字段的类型，枚举值：Domain -> 域名转发规则；Path -> 路径转发规则；Default -> 默认转发规则，不传默认值Domain
     *
     * @param string $type
     */
    public function setType(string $type) {
        $this->set("Type", $type);
    }


}
