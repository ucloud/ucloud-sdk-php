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
namespace UCloud\UK8S\Models;

use UCloud\Core\Response\Response;

class ImageInfo extends Response
{
    

    /**
     * ZoneId: 可用区 Id
     *
     * @return integer|null
     */
    public function getZoneId()
    {
        return $this->get("ZoneId");
    }

    /**
     * ZoneId: 可用区 Id
     *
     * @param int $zoneId
     */
    public function setZoneId($zoneId)
    {
        $this->set("ZoneId", $zoneId);
    }

    /**
     * ImageId: 镜像 Id
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像 Id
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * NotSupportGPU: 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *
     * @return boolean|null
     */
    public function getNotSupportGPU()
    {
        return $this->get("NotSupportGPU");
    }

    /**
     * NotSupportGPU: 该镜像是否支持GPU机型，枚举值[true:不支持，false:支持]。
     *
     * @param boolean $notSupportGPU
     */
    public function setNotSupportGPU($notSupportGPU)
    {
        $this->set("NotSupportGPU", $notSupportGPU);
    }

    /**
     * OsType: OS 类型
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: OS 类型
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * OsName: OS 名称
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: OS 名称
     *
     * @param string $osName
     */
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * Features: 镜像支持的特性
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->get("Features");
    }

    /**
     * Features: 镜像支持的特性
     *
     * @param string[] $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features);
    }

    /**
     * ImageSize: 镜像大小
     *
     * @return integer|null
     */
    public function getImageSize()
    {
        return $this->get("ImageSize");
    }

    /**
     * ImageSize: 镜像大小
     *
     * @param int $imageSize
     */
    public function setImageSize($imageSize)
    {
        $this->set("ImageSize", $imageSize);
    }

    /**
     * IntegratedSoftware: 集成软件名称, 如NV驱动版本、cuda版本
     *
     * @return string|null
     */
    public function getIntegratedSoftware()
    {
        return $this->get("IntegratedSoftware");
    }

    /**
     * IntegratedSoftware: 集成软件名称, 如NV驱动版本、cuda版本
     *
     * @param string $integratedSoftware
     */
    public function setIntegratedSoftware($integratedSoftware)
    {
        $this->set("IntegratedSoftware", $integratedSoftware);
    }

    /**
     * SupportedGPUTypes: 支持的GPU机型
     *
     * @return string[]|null
     */
    public function getSupportedGPUTypes()
    {
        return $this->get("SupportedGPUTypes");
    }

    /**
     * SupportedGPUTypes: 支持的GPU机型
     *
     * @param string[] $supportedGPUTypes
     */
    public function setSupportedGPUTypes(array $supportedGPUTypes)
    {
        $this->set("SupportedGPUTypes", $supportedGPUTypes);
    }
}
