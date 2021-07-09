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

use UCloud\Core\Response\Response;

class CreateCubeDeploymentResponse extends Response
{
    

    /**
     * DeploymentId: 控制器ID
     *
     * @return string|null
     */
    public function getDeploymentId(): string
    {
        return $this->get("DeploymentId");
    }

    /**
     * DeploymentId: 控制器ID
     *
     * @param string $deploymentId
     */
    public function setDeploymentId(string $deploymentId)
    {
        $this->set("DeploymentId", $deploymentId);
    }

    /**
     * Deployment: 经过base64编码的Deployment的yaml
     *
     * @return string|null
     */
    public function getDeployment(): string
    {
        return $this->get("Deployment");
    }

    /**
     * Deployment: 经过base64编码的Deployment的yaml
     *
     * @param string $deployment
     */
    public function setDeployment(string $deployment)
    {
        $this->set("Deployment", $deployment);
    }
}
