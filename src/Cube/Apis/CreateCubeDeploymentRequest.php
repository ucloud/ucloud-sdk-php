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

class CreateCubeDeploymentRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateCubeDeployment"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("VPCId");
        $this->markRequired("SubnetId");
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
    public function setRegion(string $region)
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
    public function setZone(string $zone)
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
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * VPCId: VPCId
     *
     * @return string|null
     */
    public function getVPCId()
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
    /**
     * SubnetId: 子网Id
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网Id
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
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
    public function setDeployment(string $deployment)
    {
        $this->set("Deployment", $deployment);
    }
    /**
     * Name: Deployment名称
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: Deployment名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Postpay， \\ 后付费；默认为后付费
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Postpay， \\ 后付费；默认为后付费
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * CpuPlatform: Cpu平台（V6：Intel、A2：AMD），默认V6。支持的地域（北京2B、北京2E、上海2A、广东、香港 、东京）目前北京2E仅有A2，其余地域仅有V6
     *
     * @return string|null
     */
    public function getCpuPlatform()
    {
        return $this->get("CpuPlatform");
    }

    /**
     * CpuPlatform: Cpu平台（V6：Intel、A2：AMD），默认V6。支持的地域（北京2B、北京2E、上海2A、广东、香港 、东京）目前北京2E仅有A2，其余地域仅有V6
     *
     * @param string $cpuPlatform
     */
    public function setCpuPlatform(string $cpuPlatform)
    {
        $this->set("CpuPlatform", $cpuPlatform);
    }
    /**
     * KubeConfig: base64编码的kubeconfig。大小不超过16KB
     *
     * @return string|null
     */
    public function getKubeConfig()
    {
        return $this->get("KubeConfig");
    }

    /**
     * KubeConfig: base64编码的kubeconfig。大小不超过16KB
     *
     * @param string $kubeConfig
     */
    public function setKubeConfig(string $kubeConfig)
    {
        $this->set("KubeConfig", $kubeConfig);
    }
    /**
     * Quantity: 购买时长。默认:值 1。 月付时，此参数传0，代表购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认:值 1。 月付时，此参数传0，代表购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }
    /**
     * Tag: 业务组。默认：Default（Default即为未分组）
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组。默认：Default（Default即为未分组）
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
}
