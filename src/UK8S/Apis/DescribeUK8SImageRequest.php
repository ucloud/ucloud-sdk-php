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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;

class DescribeUK8SImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUK8SImage"]);
        $this->markRequired("Region");
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
     * ProductType: 产品类型，可选值uhost、uphost，不填则返回所有
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型，可选值uhost、uphost，不填则返回所有
     *
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * MachineType: 适用机型，如O、G、OPRO等，默认为O
     *
     * @return string|null
     */
    public function getMachineType()
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 适用机型，如O、G、OPRO等，默认为O
     *
     * @param string $machineType
     */
    public function setMachineType($machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * GPUType: 适用GPU类型，如1080Ti、4090、V100、A800等，MachineType为G时必须提供
     *
     * @return string|null
     */
    public function getGPUType()
    {
        return $this->get("GPUType");
    }

    /**
     * GPUType: 适用GPU类型，如1080Ti、4090、V100、A800等，MachineType为G时必须提供
     *
     * @param string $gpuType
     */
    public function setGPUType($gpuType)
    {
        $this->set("GPUType", $gpuType);
    }

    /**
     * K8sVersion: k8s集群版本，如1.28.15
     *
     * @return string|null
     */
    public function getK8sVersion()
    {
        return $this->get("K8sVersion");
    }

    /**
     * K8sVersion: k8s集群版本，如1.28.15
     *
     * @param string $k8sVersion
     */
    public function setK8sVersion($k8sVersion)
    {
        $this->set("K8sVersion", $k8sVersion);
    }
}
