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
namespace UCloud\Cube\Apis;

use UCloud\Core\Request\Request;

class GetCubeExecTokenRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetCubeExecToken"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ContainerName");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * ContainerName: 容器名称
     *
     * @return string|null
     */
    public function getContainerName(): string
    {
        return $this->get("ContainerName");
    }

    /**
     * ContainerName: 容器名称
     *
     * @param string $containerName
     */
    public function setContainerName(string $containerName)
    {
        $this->set("ContainerName", $containerName);
    }

    /**
     * CubeId: CubeId 和 Uid 中必须填写任意一个。CubeId 是所有 Cube 资源的唯一 ID，如非在 UK8S 通过 Virtual Kubelet 插件创建的 Cube， 则必填 CubeId
     *
     * @return string|null
     */
    public function getCubeId(): string
    {
        return $this->get("CubeId");
    }

    /**
     * CubeId: CubeId 和 Uid 中必须填写任意一个。CubeId 是所有 Cube 资源的唯一 ID，如非在 UK8S 通过 Virtual Kubelet 插件创建的 Cube， 则必填 CubeId
     *
     * @param string $cubeId
     */
    public function setCubeId(string $cubeId)
    {
        $this->set("CubeId", $cubeId);
    }

    /**
     * Uid: CubeId 和 Uid 中必须填写任意一个。Uid 是在 UK8S 中通过 Virtual Kubelet 插件创建出的 Cube 的唯一标识
     *
     * @return string|null
     */
    public function getUid(): string
    {
        return $this->get("Uid");
    }

    /**
     * Uid: CubeId 和 Uid 中必须填写任意一个。Uid 是在 UK8S 中通过 Virtual Kubelet 插件创建出的 Cube 的唯一标识
     *
     * @param string $uid
     */
    public function setUid(string $uid)
    {
        $this->set("Uid", $uid);
    }
}
