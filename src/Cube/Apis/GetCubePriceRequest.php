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

class GetCubePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetCubePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Count");
        $this->markRequired("Cpu");
        $this->markRequired("Mem");
        $this->markRequired("ChargeType");
        $this->markRequired("Quantity");
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
     * Count: 购买数量
     *
     * @return string|null
     */
    public function getCount()
    {
        return $this->get("Count");
    }

    /**
     * Count: 购买数量
     *
     * @param string $count
     */
    public function setCount($count)
    {
        $this->set("Count", $count);
    }

    /**
     * Cpu: CPU 配置，单位为毫核，例如如 1 核则须输入 1000
     *
     * @return string|null
     */
    public function getCpu()
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: CPU 配置，单位为毫核，例如如 1 核则须输入 1000
     *
     * @param string $cpu
     */
    public function setCpu($cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Mem: 内存配置，单位为 Mi，例如 1Gi 须输入 1024
     *
     * @return string|null
     */
    public function getMem()
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 内存配置，单位为 Mi，例如 1Gi 须输入 1024
     *
     * @param string $mem
     */
    public function setMem($mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按秒后付费，默认为月付
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式。枚举值为： \\ > Year，按年付费； \\ > Month，按月付费；\\ > Dynamic，按小时预付费 \\ > Postpay，按秒后付费，默认为月付
     *
     * @param string $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买时长。默认:值 1。按小时购买（Dynamic/Postpay）时无需此参数。 月付时，此参数传0，代表购买至月末。
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->set("Quantity", $quantity);
    }
}
