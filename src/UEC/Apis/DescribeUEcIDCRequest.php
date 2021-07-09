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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class DescribeUEcIDCRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUEcIDC"]);
        $this->markRequired("Cpu");
        $this->markRequired("Memory");
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
     * Cpu: 节点cpu核数
     *
     * @return integer|null
     */
    public function getCpu(): int
    {
        return $this->get("Cpu");
    }

    /**
     * Cpu: 节点cpu核数
     *
     * @param int $cpu
     */
    public function setCpu(int $cpu)
    {
        $this->set("Cpu", $cpu);
    }

    /**
     * Memory: 节点内存大小， 单位GB
     *
     * @return integer|null
     */
    public function getMemory(): int
    {
        return $this->get("Memory");
    }

    /**
     * Memory: 节点内存大小， 单位GB
     *
     * @param int $memory
     */
    public function setMemory(int $memory)
    {
        $this->set("Memory", $memory);
    }

    /**
     * IdcId: Idc机房id。默认全部机房
     *
     * @return string[]|null
     */
    public function getIdcId(): array
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: Idc机房id。默认全部机房
     *
     * @param string[] $idcId
     */
    public function setIdcId(array $idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * Type: 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *
     * @return integer|null
     */
    public function getType(): int
    {
        return $this->get("Type");
    }

    /**
     * Type: 0-其它, 1-一线城市单线,2-二线城市单线, 3-全国教育网, 4-全国三通
     *
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->set("Type", $type);
    }

    /**
     * ProductType: 产品类型：normal（通用型），hf（高主频型）
     *
     * @return string|null
     */
    public function getProductType(): string
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型：normal（通用型），hf（高主频型）
     *
     * @param string $productType
     */
    public function setProductType(string $productType)
    {
        $this->set("ProductType", $productType);
    }
}
