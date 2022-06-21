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
use UCloud\UEC\Params\CreateUEcHolderParamPack;
use UCloud\UEC\Params\CreateUEcHolderParamImage;
use UCloud\UEC\Params\CreateUEcHolderParamStorage;

class CreateUEcHolderRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUEcHolder"]);
        $this->markRequired("IdcId");
        $this->markRequired("CpuCore");
        $this->markRequired("MemSize");
        $this->markRequired("SubnetId");
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
     * IdcId: 机房id
     *
     * @return string|null
     */
    public function getIdcId()
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房id
     *
     * @param string $idcId
     */
    public function setIdcId($idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * CpuCore: 容器组Cpu总核数
     *
     * @return float|null
     */
    public function getCpuCore()
    {
        return $this->get("CpuCore");
    }

    /**
     * CpuCore: 容器组Cpu总核数
     *
     * @param float $cpuCore
     */
    public function setCpuCore($cpuCore)
    {
        $this->set("CpuCore", $cpuCore);
    }

    /**
     * MemSize: 容器组总内存，单位MB
     *
     * @return int|null
     */
    public function getMemSize()
    {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 容器组总内存，单位MB
     *
     * @param int $memSize
     */
    public function setMemSize($memSize)
    {
        $this->set("MemSize", $memSize);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId()
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId($subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * Name: 容器组名称（默认default）
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->get("Name");
    }

    /**
     * Name: 容器组名称（默认default）
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->set("Name", $name);
    }

    /**
     * ProductType: 机型（normal-经济型，hf-标准型，默认normal）
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 机型（normal-经济型，hf-标准型，默认normal）
     *
     * @param string $productType
     */
    public function setProductType($productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * RestartStrategy: 重启策略（0总是，1失败是，2永不，默认0）
     *
     * @return int|null
     */
    public function getRestartStrategy()
    {
        return $this->get("RestartStrategy");
    }

    /**
     * RestartStrategy: 重启策略（0总是，1失败是，2永不，默认0）
     *
     * @param int $restartStrategy
     */
    public function setRestartStrategy($restartStrategy)
    {
        $this->set("RestartStrategy", $restartStrategy);
    }

    /**
     * ElasticIp: 绑定外网ip（yes-绑定，no-不绑定，默认no）
     *
     * @return string|null
     */
    public function getElasticIp()
    {
        return $this->get("ElasticIp");
    }

    /**
     * ElasticIp: 绑定外网ip（yes-绑定，no-不绑定，默认no）
     *
     * @param string $elasticIp
     */
    public function setElasticIp($elasticIp)
    {
        $this->set("ElasticIp", $elasticIp);
    }

    /**
     * Bandwidth: 外网绑定的带宽（单位M，默认0，只有当ElasticIp为yes时，默认1）
     *
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: 外网绑定的带宽（单位M，默认0，只有当ElasticIp为yes时，默认1）
     *
     * @param int $bandwidth
     */
    public function setBandwidth($bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * FirewallId: 防火墙ID
     *
     * @return string|null
     */
    public function getFirewallId()
    {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 防火墙ID
     *
     * @param string $firewallId
     */
    public function setFirewallId($firewallId)
    {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * ChargeType: 付费方式（2按月、3按年。默认2，默认月付）
     *
     * @return int|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式（2按月、3按年。默认2，默认月付）
     *
     * @param int $chargeType
     */
    public function setChargeType($chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ChargeQuantity: 月数或者年数（默认值：1，当为按月计费时，0表示计费到月底，默认值为0）
     *
     * @return int|null
     */
    public function getChargeQuantity()
    {
        return $this->get("ChargeQuantity");
    }

    /**
     * ChargeQuantity: 月数或者年数（默认值：1，当为按月计费时，0表示计费到月底，默认值为0）
     *
     * @param int $chargeQuantity
     */
    public function setChargeQuantity($chargeQuantity)
    {
        $this->set("ChargeQuantity", $chargeQuantity);
    }

    /**
     * Pack: 
     *
     * @return CreateUEcHolderParamPack[]|null
     */
    public function getPack()
    {
        $items = $this->get("Pack");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUEcHolderParamPack($item));
        }
        return $result;
    }

    /**
     * Pack: 
     *
     * @param CreateUEcHolderParamPack[] $pack
     */
    public function setPack(array $pack)
    {
        $result = [];
        foreach ($pack as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Image: 
     *
     * @return CreateUEcHolderParamImage[]|null
     */
    public function getImage()
    {
        $items = $this->get("Image");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUEcHolderParamImage($item));
        }
        return $result;
    }

    /**
     * Image: 
     *
     * @param CreateUEcHolderParamImage[] $image
     */
    public function setImage(array $image)
    {
        $result = [];
        foreach ($image as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Storage: 
     *
     * @return CreateUEcHolderParamStorage[]|null
     */
    public function getStorage()
    {
        $items = $this->get("Storage");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CreateUEcHolderParamStorage($item));
        }
        return $result;
    }

    /**
     * Storage: 
     *
     * @param CreateUEcHolderParamStorage[] $storage
     */
    public function setStorage(array $storage)
    {
        $result = [];
        foreach ($storage as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }


}
