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
namespace UCloud\UPhone\Models;

use UCloud\Core\Response\Response;

class UPhoneImageInstance extends Response
{
    

    /**
     * ImageId: 云手机镜像资源Id
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 云手机镜像资源Id
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ImageName: 云手机镜像名称
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 云手机镜像名称
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * OsType: 云手机镜像系统
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 云手机镜像系统
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * ImageType: 云手机镜像类型，枚举值：<br />> 用户自制镜像: CUSTOM;  <br />> 标准镜像: BASE;;
     *
     * @return string|null
     */
    public function getImageType()
    {
        return $this->get("ImageType");
    }

    /**
     * ImageType: 云手机镜像类型，枚举值：<br />> 用户自制镜像: CUSTOM;  <br />> 标准镜像: BASE;;
     *
     * @param string $imageType
     */
    public function setImageType($imageType)
    {
        $this->set("ImageType", $imageType);
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳。
     *
     * @return integer|null
     */
    public function getCreateTime()
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间，格式为Unix时间戳。
     *
     * @param int $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * ModifyTime: 修改时间，格式为Unix时间戳。
     *
     * @return integer|null
     */
    public function getModifyTime()
    {
        return $this->get("ModifyTime");
    }

    /**
     * ModifyTime: 修改时间，格式为Unix时间戳。
     *
     * @param int $modifyTime
     */
    public function setModifyTime($modifyTime)
    {
        $this->set("ModifyTime", $modifyTime);
    }

    /**
     * ImageState: 云手机镜像状态<br />* 制作中: 制作中; <br />* 可用的: CREATING; <br />* 制作失败: CREATE_FAILED; <br />* 上传中: UPLOADING <br />* 上传失败: UPLOAD_FAILED; <br />* 未知状态：UNDEFINED或""
     *
     * @return string|null
     */
    public function getImageState()
    {
        return $this->get("ImageState");
    }

    /**
     * ImageState: 云手机镜像状态<br />* 制作中: 制作中; <br />* 可用的: CREATING; <br />* 制作失败: CREATE_FAILED; <br />* 上传中: UPLOADING <br />* 上传失败: UPLOAD_FAILED; <br />* 未知状态：UNDEFINED或""
     *
     * @param string $imageState
     */
    public function setImageState($imageState)
    {
        $this->set("ImageState", $imageState);
    }

    /**
     * Description: 云手机镜像描述信息
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get("Description");
    }

    /**
     * Description: 云手机镜像描述信息
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->set("Description", $description);
    }

    /**
     * UPhoneId: 云手机镜像创建时所属云手机资源 Id
     *
     * @return string|null
     */
    public function getUPhoneId()
    {
        return $this->get("UPhoneId");
    }

    /**
     * UPhoneId: 云手机镜像创建时所属云手机资源 Id
     *
     * @param string $uPhoneId
     */
    public function setUPhoneId($uPhoneId)
    {
        $this->set("UPhoneId", $uPhoneId);
    }

    /**
     * AppVersions: 云手机镜像所安装的应用版本列表，具体参数见 [AppVersionInstance](#appversioninstance)
     *
     * @return AppVersionInstance[]|null
     */
    public function getAppVersions()
    {
        $items = $this->get("AppVersions");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new AppVersionInstance($item));
        }
        return $result;
    }

    /**
     * AppVersions: 云手机镜像所安装的应用版本列表，具体参数见 [AppVersionInstance](#appversioninstance)
     *
     * @param AppVersionInstance[] $appVersions
     */
    public function setAppVersions(array $appVersions)
    {
        $result = [];
        foreach ($appVersions as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
