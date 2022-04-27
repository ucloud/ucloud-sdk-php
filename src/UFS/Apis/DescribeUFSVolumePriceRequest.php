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

namespace UCloud\UFS\Apis;

use UCloud\Core\Request\Request;

class DescribeUFSVolumePriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUFSVolumePrice"]);
        $this->markRequired("Region");
        $this->markRequired("Size");
        $this->markRequired("StorageType");
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
     * Size: 文件系统大小，单位为GB，新架构容量型最小容量为500GB，以100GB递增，最大不超过100TB。新架构性能型最小容量为100GB，以100GB递增，最大不超过20TB
     *
     * @return integer|null
     */
    public function getSize()
    {
        return $this->get("Size");
    }

    /**
     * Size: 文件系统大小，单位为GB，新架构容量型最小容量为500GB，以100GB递增，最大不超过100TB。新架构性能型最小容量为100GB，以100GB递增，最大不超过20TB
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }
    /**
     * StorageType: 文件存储类型，枚举值，Basic表示容量型产品，Advanced表示性能型产品
     *
     * @return string|null
     */
    public function getStorageType()
    {
        return $this->get("StorageType");
    }

    /**
     * StorageType: 文件存储类型，枚举值，Basic表示容量型产品，Advanced表示性能型产品
     *
     * @param string $storageType
     */
    public function setStorageType(string $storageType)
    {
        $this->set("StorageType", $storageType);
    }
    /**
     * Quantity: 购买UFS的时长， 默认为1
     *
     * @return integer|null
     */
    public function getQuantity()
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 购买UFS的时长， 默认为1
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }
    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Dynamic
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial，默认: Dynamic
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
    /**
     * VolumeId: 文件系统id，第一次创建文件系统时不需要传这个参数
     *
     * @return string|null
     */
    public function getVolumeId()
    {
        return $this->get("VolumeId");
    }

    /**
     * VolumeId: 文件系统id，第一次创建文件系统时不需要传这个参数
     *
     * @param string $volumeId
     */
    public function setVolumeId(string $volumeId)
    {
        $this->set("VolumeId", $volumeId);
    }
}
