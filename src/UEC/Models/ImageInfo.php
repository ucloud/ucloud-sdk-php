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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class ImageInfo extends Response
{
    

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
     * ImageType: 镜像类型：1标准镜像，2行业镜像，3自定义镜像
     *
     * @return integer|null
     */
    public function getImageType()
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 镜像类型：1标准镜像，2行业镜像，3自定义镜像
     *
     * @param int $imageType
     */
    public function setImageType($imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * OcType: 系统类型：unix, windows
     *
     * @return string|null
     */
    public function getOcType()
    {
        return $this->get("OcType");
    }

    /**
     * OcType: 系统类型：unix, windows
     *
     * @param string $ocType
     */
    public function setOcType($ocType)
    {
        $this->set("OcType", $ocType);
    }

    /**
     * ImageDesc: 镜像描述
     *
     * @return string|null
     */
    public function getImageDesc()
    {
        return $this->get("ImageDesc");
    }

    /**
     * ImageDesc: 镜像描述
     *
     * @param string $imageDesc
     */
    public function setImageDesc($imageDesc)
    {
        $this->set("ImageDesc", $imageDesc);
    }

    /**
     * State: 镜像状态：镜像状态 1可用，2不可用，3制作中
     *
     * @return integer|null
     */
    public function getState()
    {
        return $this->get("State");
    }

    /**
     * State: 镜像状态：镜像状态 1可用，2不可用，3制作中
     *
     * @param int $state
     */
    public function setState($state)
    {
        $this->set("State", $state);
    }

    /**
     * ImageSize: 镜像大小，单位GB
     *
     * @return integer|null
     */
    public function getImageSize()
    {
        return $this->get("ImageSize");
    }

    /**
     * ImageSize: 镜像大小，单位GB
     *
     * @param int $imageSize
     */
    public function setImageSize($imageSize)
    {
        $this->set("ImageSize", $imageSize);
    }

    /**
     * CreateTime: 镜像创建时间戳
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 镜像创建时间戳
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * DeployInfoList: 部署详情列表
     *
     * @return DeployImageInfo[]|null
     */
    public function getDeployInfoList()
    {
        $items = $this->get("DeployInfoList");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DeployImageInfo($item));
        }
        return $result;
    }

    /**
     * DeployInfoList: 部署详情列表
     *
     * @param DeployImageInfo[] $deployInfoList
     */
    public function setDeployInfoList(array $deployInfoList)
    {
        $result = [];
        foreach ($deployInfoList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Gpu: 是否支持Gpu(1-支持,0-不支持)
     *
     * @return integer|null
     */
    public function getGpu()
    {
        return $this->get("Gpu");
    }

    /**
     * Gpu: 是否支持Gpu(1-支持,0-不支持)
     *
     * @param int $gpu
     */
    public function setGpu($gpu)
    {
        $this->set("Gpu", $gpu);
    }
}
