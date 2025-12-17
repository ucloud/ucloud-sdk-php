<?php
/**
 * Copyright 2025 UCloud Technology Co., Ltd.
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
namespace UCloud\ULightHost\Models;

use UCloud\Core\Response\Response;

class ULHostImageSet extends Response
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
     * DisplayName: 用于控制台显示的名称
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->get("DisplayName");
    }

    /**
     * DisplayName: 用于控制台显示的名称
     *
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->set("DisplayName", $displayName);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag()
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->set("Tag", $tag);
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
     * Features: 特殊状态标识，目前包含NetEnhnced（网络增强1.0）, NetEnhanced_Ultra（网络增强2.0）, NetEnhanced_Extreme（网络增强3.0）, HotPlug(热升级), GPU（GPU镜像）,CloudInit, IPv6（支持IPv6网络）,RssdAttachable（支持RSSD云盘）,Vgpu_AMD（支持AMD的vgpu）,Vgpu_NVIDIA（支持NVIDIA的vgpu）,Aarch64_Type（支持arm64架构）
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->get("Features");
    }

    /**
     * Features: 特殊状态标识，目前包含NetEnhnced（网络增强1.0）, NetEnhanced_Ultra（网络增强2.0）, NetEnhanced_Extreme（网络增强3.0）, HotPlug(热升级), GPU（GPU镜像）,CloudInit, IPv6（支持IPv6网络）,RssdAttachable（支持RSSD云盘）,Vgpu_AMD（支持AMD的vgpu）,Vgpu_NVIDIA（支持NVIDIA的vgpu）,Aarch64_Type（支持arm64架构）
     *
     * @param string[] $features
     */
    public function setFeatures(array $features)
    {
        $this->set("Features", $features);
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
     * State: 镜像状态， 可用：Available，制作中：Making， 不可用：Unavailable，复制中：Copying
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 镜像状态， 可用：Available，制作中：Making， 不可用：Unavailable，复制中：Copying
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

    /**
     * MaintainEol: 系统EOL的时间，格式：YYYY/MM/DD
     *
     * @return string|null
     */
    public function getMaintainEol()
    {
        return $this->get("MaintainEol");
    }

    /**
     * MaintainEol: 系统EOL的时间，格式：YYYY/MM/DD
     *
     * @param string $maintainEol
     */
    public function setMaintainEol($maintainEol)
    {
        $this->set("MaintainEol", $maintainEol);
    }

    /**
     * SceneCategories: 场景分类，目前包含Featured（精选），PreInstalledDrivers（预装驱动），AIPainting（AI绘画），AIModels（AI模型），HPC（高性能计算）
     *
     * @return string[]|null
     */
    public function getSceneCategories()
    {
        return $this->get("SceneCategories");
    }

    /**
     * SceneCategories: 场景分类，目前包含Featured（精选），PreInstalledDrivers（预装驱动），AIPainting（AI绘画），AIModels（AI模型），HPC（高性能计算）
     *
     * @param string[] $sceneCategories
     */
    public function setSceneCategories(array $sceneCategories)
    {
        $this->set("SceneCategories", $sceneCategories);
    }

    /**
     * ImageLogoLink: 应用镜像图标url
     *
     * @return string|null
     */
    public function getImageLogoLink()
    {
        return $this->get("ImageLogoLink");
    }

    /**
     * ImageLogoLink: 应用镜像图标url
     *
     * @param string $imageLogoLink
     */
    public function setImageLogoLink($imageLogoLink)
    {
        $this->set("ImageLogoLink", $imageLogoLink);
    }
}
