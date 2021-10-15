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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class UnBindUEcFirewallRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UnBindUEcFirewall"]);
        $this->markRequired("FirewallId");
        $this->markRequired("ResourceId");
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
     * FirewallId: 防火墙Id
     *
     * @return string|null
     */
    public function getFirewallId()
    {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 防火墙Id
     *
     * @param string $firewallId
     */
    public function setFirewallId($firewallId)
    {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * ResourceId: 节点Id或容器组资源id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 节点Id或容器组资源id
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }
}
