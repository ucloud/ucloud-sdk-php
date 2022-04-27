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
namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

class PHostImageSet extends Response
{
    

    /**
     * ImageId: 镜像ID
     *
     * @return string|null
     */
    public function getImageId(): string
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ImageName: 镜像名称
     *
     * @return string|null
     */
    public function getImageName(): string
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称
     *
     * @param string $imageName
     */
    public function setImageName(string $imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * OsName: 操作系统名称
     *
     * @return string|null
     */
    public function getOsName(): string
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 操作系统名称
     *
     * @param string $osName
     */
    public function setOsName(string $osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * OsType: 操作系统类型
     *
     * @return string|null
     */
    public function getOsType(): string
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统类型
     *
     * @param string $osType
     */
    public function setOsType(string $osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * Support: 支持的机型
     *
     * @return string[]|null
     */
    public function getSupport(): array
    {
        return $this->get("Support");
    }

    /**
     * Support: 支持的机型
     *
     * @param string[] $support
     */
    public function setSupport(array $support)
    {
        $this->set("Support", $support);
    }

    /**
     * Version: 当前版本
     *
     * @return string|null
     */
    public function getVersion(): string
    {
        return $this->get("Version");
    }

    /**
     * Version: 当前版本
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }

    /**
     * ImageType: 枚举值：Base=>基础镜像，Custom=>自制镜像。
     *
     * @return string|null
     */
    public function getImageType(): string
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 枚举值：Base=>基础镜像，Custom=>自制镜像。
     *
     * @param string $imageType
     */
    public function setImageType(string $imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * CreateTime: 裸金属2.0参数。镜像创建时间。
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 裸金属2.0参数。镜像创建时间。
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * State: 裸金属2.0参数。镜像当前状态。
     *
     * @return string|null
     */
    public function getState(): string
    {
        return $this->get("State");
    }

    /**
     * State: 裸金属2.0参数。镜像当前状态。
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }

    /**
     * ImageSize: 裸金属2.0参数。镜像大小。
     *
     * @return integer|null
     */
    public function getImageSize(): int
    {
        return $this->get("ImageSize");
    }

    /**
     * ImageSize: 裸金属2.0参数。镜像大小。
     *
     * @param int $imageSize
     */
    public function setImageSize(int $imageSize)
    {
        $this->set("ImageSize", $imageSize);
    }

    /**
     * ImageDescription: 镜像描述
     *
     * @return string|null
     */
    public function getImageDescription(): string
    {
        return $this->get("ImageDescription");
    }

    /**
     * ImageDescription: 镜像描述
     *
     * @param string $imageDescription
     */
    public function setImageDescription(string $imageDescription)
    {
        $this->set("ImageDescription", $imageDescription);
    }
}
