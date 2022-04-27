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

namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreateUGA3PortRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUGA3Port"]);
        $this->markRequired("ProjectId");
        $this->markRequired("InstanceId");
    }


    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * InstanceId: 加速配置实例ID
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->get("InstanceId");
    }

    /**
     * InstanceId: 加速配置实例ID
     *
     * @param string $instanceId
     */
    public function setInstanceId(string $instanceId)
    {
        $this->set("InstanceId", $instanceId);
    }
    /**
     * TCP: TCP接入端口，禁用65123端口
     *
     * @return int[]|null
     */
    public function getTCP()
    {
        return $this->get("TCP");
    }

    /**
     * TCP: TCP接入端口，禁用65123端口
     *
     * @param int[] $tcp
     */
    public function setTCP(array $tcp)
    {
        $this->set("TCP", $tcp);
    }
    /**
     * TCPRS: TCP回源端口
     *
     * @return int[]|null
     */
    public function getTCPRS()
    {
        return $this->get("TCPRS");
    }

    /**
     * TCPRS: TCP回源端口
     *
     * @param int[] $tcprs
     */
    public function setTCPRS(array $tcprs)
    {
        $this->set("TCPRS", $tcprs);
    }
}
