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

class SwitchToFirewallRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "SwitchToFirewall"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ResourceId");
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
     * ResourceId: 资源ID。资源类型为 UHost、UNI、PAAS 资源
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID。资源类型为 UHost、UNI、PAAS 资源
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Firewall: 防火墙 ID
     *
     * @return string|null
     */
    public function getFirewall()
    {
        return $this->get("Firewall");
    }

    /**
     * Firewall: 防火墙 ID
     *
     * @param string $firewall
     */
    public function setFirewall($firewall)
    {
        $this->set("Firewall", $firewall);
    }

    /**
     * NodeToFirewall: map[string]string，string 到 防火墙 ID 的映射。ResourceId是uhost则Node是uni；ResourceId是uhadoop则Node是hadoophost
     *
     * @return string|null
     */
    public function getNodeToFirewall()
    {
        return $this->get("NodeToFirewall");
    }

    /**
     * NodeToFirewall: map[string]string，string 到 防火墙 ID 的映射。ResourceId是uhost则Node是uni；ResourceId是uhadoop则Node是hadoophost
     *
     * @param string $nodeToFirewall
     */
    public function setNodeToFirewall($nodeToFirewall)
    {
        $this->set("NodeToFirewall", $nodeToFirewall);
    }
}
