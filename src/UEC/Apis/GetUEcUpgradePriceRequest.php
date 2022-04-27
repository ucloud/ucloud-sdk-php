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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class GetUEcUpgradePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUEcUpgradePrice"]);
        $this->markRequired("NodeId");
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
     * NodeId: 虚拟机资源ID
     *
     * @return string|null
     */
    public function getNodeId(): string
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 虚拟机资源ID
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * CpuCore: cpu核心数
     *
     * @return integer|null
     */
    public function getCpuCore(): int
    {
        return $this->get("CpuCore");
    }

    /**
     * CpuCore: cpu核心数
     *
     * @param int $cpuCore
     */
    public function setCpuCore(int $cpuCore)
    {
        $this->set("CpuCore", $cpuCore);
    }

    /**
     * MemSize: 内存大小，单位GB
     *
     * @return integer|null
     */
    public function getMemSize(): int
    {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 内存大小，单位GB
     *
     * @param int $memSize
     */
    public function setMemSize(int $memSize)
    {
        $this->set("MemSize", $memSize);
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB
     *
     * @return integer|null
     */
    public function getSysDiskSize(): int
    {
        return $this->get("SysDiskSize");
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB
     *
     * @param int $sysDiskSize
     */
    public function setSysDiskSize(int $sysDiskSize)
    {
        $this->set("SysDiskSize", $sysDiskSize);
    }

    /**
     * DiskSize: 数据盘大小，单位GB
     *
     * @return integer|null
     */
    public function getDiskSize(): int
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 数据盘大小，单位GB
     *
     * @param int $diskSize
     */
    public function setDiskSize(int $diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * NetLimit: 节点带宽限制，单位Mbs
     *
     * @return integer|null
     */
    public function getNetLimit(): int
    {
        return $this->get("NetLimit");
    }

    /**
     * NetLimit: 节点带宽限制，单位Mbs
     *
     * @param int $netLimit
     */
    public function setNetLimit(int $netLimit)
    {
        $this->set("NetLimit", $netLimit);
    }
}
