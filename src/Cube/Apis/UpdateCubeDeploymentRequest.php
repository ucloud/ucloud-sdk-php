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
namespace UCloud\Cube\Apis;

use UCloud\Core\Request\Request;

class UpdateCubeDeploymentRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateCubeDeployment"]);
        $this->markRequired("Region");
        $this->markRequired("DeploymentId");
        $this->markRequired("Deployment");
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
     * DeploymentId: Deployment的Id
     *
     * @return string|null
     */
    public function getDeploymentId()
    {
        return $this->get("DeploymentId");
    }

    /**
     * DeploymentId: Deployment的Id
     *
     * @param string $deploymentId
     */
    public function setDeploymentId($deploymentId)
    {
        $this->set("DeploymentId", $deploymentId);
    }

    /**
     * Deployment: base64编码的Deployment的yaml。大小不超过16KB
     *
     * @return string|null
     */
    public function getDeployment()
    {
        return $this->get("Deployment");
    }

    /**
     * Deployment: base64编码的Deployment的yaml。大小不超过16KB
     *
     * @param string $deployment
     */
    public function setDeployment($deployment)
    {
        $this->set("Deployment", $deployment);
    }

    /**
     * Name: Deployment的name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: Deployment的name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }
}
