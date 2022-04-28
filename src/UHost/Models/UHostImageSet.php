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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UHostImageSet extends Response
{
    

    /**
     * Zone: 可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ImageId: 镜像ID
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
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
     * OsType: 操作系统类型：Linux，Windows
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统类型：Linux，Windows
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * OsName: 操作系统名称
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 操作系统名称
     *
     * @param string $osName
     */
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * ImageType: 镜像类型 标准镜像：Base， 行业镜像：Business，自定义镜像：Custom
     *
     * @return string|null
     */
    public function getImageType()
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类型 标准镜像：Base， 行业镜像：Business，自定义镜像：Custom
     *
     * @param string $imageType
     */
    public function setImageType($imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * Features: 特殊状态标识， 目前包含NetEnhnced（网络增强1.0）, NetEnhanced_Ultra]（网络增强2.0）, HotPlug(热升级), CloudInit, IPv6
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->get("Features");
    }

    /**
     * Features: 特殊状态标识， 目前包含NetEnhnced（网络增强1.0）, NetEnhanced_Ultra]（网络增强2.0）, HotPlug(热升级), CloudInit, IPv6
     *
     * @param string[] $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features);
    }

    /**
     * FuncType: 行业镜像类型（仅行业镜像将返回这个值）
     *
     * @return string|null
     */
    public function getFuncType()
    {
        return $this->get("FuncType");
    }

    /**
     * FuncType: 行业镜像类型（仅行业镜像将返回这个值）
     *
     * @param string $funcType
     */
    public function setFuncType($funcType)
    {
        $this->set("FuncType", $funcType);
    }

    /**
     * IntegratedSoftware: 集成软件名称（仅行业镜像将返回这个值）
     *
     * @return string|null
     */
    public function getIntegratedSoftware()
    {
        return $this->get("IntegratedSoftware");
    }

    /**
     * IntegratedSoftware: 集成软件名称（仅行业镜像将返回这个值）
     *
     * @param string $integratedSoftware
     */
    public function setIntegratedSoftware($integratedSoftware)
    {
        $this->set("IntegratedSoftware", $integratedSoftware);
    }

    /**
     * Vendor: 供应商（仅行业镜像将返回这个值）
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->get("Vendor");
    }

    /**
     * Vendor: 供应商（仅行业镜像将返回这个值）
     *
     * @param string $vendor
     */
    public function setVendor($vendor)
    {
        $this->set("Vendor", $vendor);
    }

    /**
     * Links: 介绍链接（仅行业镜像将返回这个值）
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->get("Links");
    }

    /**
     * Links: 介绍链接（仅行业镜像将返回这个值）
     *
     * @param string $links
     */
    public function setLinks($links)
    {
        $this->set("Links", $links);
    }

    /**
     * State: 镜像状态， 可用：Available，制作中：Making， 不可用：Unavailable
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 镜像状态， 可用：Available，制作中：Making， 不可用：Unavailable
     *
     * @param string $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ImageDescription: 镜像描述
     *
     * @return string|null
     */
    public function getImageDescription()
    {
        return $this->get("ImageDescription");
    }

    /**
     * ImageDescription: 镜像描述
     *
     * @param string $imageDescription
     */
    public function setImageDescription($imageDescription)
    {
        $this->set("ImageDescription", $imageDescription);
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
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
     * MinimalCPU: 默认值为空'''。当CentOS 7.3/7.4/7.5等镜像会标记为“Broadwell”
     *
     * @return string|null
     */
    public function getMinimalCPU()
    {
        return $this->get("MinimalCPU");
    }

    /**
     * MinimalCPU: 默认值为空'''。当CentOS 7.3/7.4/7.5等镜像会标记为“Broadwell”
     *
     * @param string $minimalCPU
     */
    public function setMinimalCPU($minimalCPU)
    {
        $this->set("MinimalCPU", $minimalCPU);
    }
}
