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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class GetUHostUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUHostUpgradePrice"]);
        $this->markRequired("Region");
        $this->markRequired("UHostId");
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
     * UHostId: UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *
     * @return string|null
     */
    public function getUHostId(): string
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: UHost实例ID。 参见 [DescribeUHostInstance](describe_uhost_instance.html)。
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：1-64（可选范围参考控制台）。默认值为当前实例的CPU核数。
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: 虚拟CPU核数。可选参数：1-64（可选范围参考控制台）。默认值为当前实例的CPU核数。
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Memory: 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值为当前实例的内存大小。
     *
     * @return integer|null
     */
    public function getMemory(): int
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 内存大小。单位：MB。范围 ：[1024, 262144]，取值为1024的倍数（可选范围参考控制台）。默认值为当前实例的内存大小。
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * NetCapValue: 网卡升降级（1，表示升级，2表示降级，0表示不变）
     *
     * @return integer|null
     */
    public function getNetCapValue(): int
    {
        return $this->get("NetCapValue");
    }

    /**
     * NetCapValue: 网卡升降级（1，表示升级，2表示降级，0表示不变）
     *
     * @param int $netCapValue
     */
    public function setNetCapValue(int $netCapValue)
    {
        $this->set("NetCapValue", $netCapValue);
    }
}
