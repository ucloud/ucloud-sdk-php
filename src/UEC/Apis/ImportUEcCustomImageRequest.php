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

class ImportUEcCustomImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ImportUEcCustomImage"]);
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
     * IdcId: 镜像需要导入机房，默认分发到所有机房
     *
     * @return string[]|null
     */
    public function getIdcId()
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 镜像需要导入机房，默认分发到所有机房
     *
     * @param string[] $idcId
     */
    public function setIdcId(array $idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * ImageId: 镜像Id，不传参表示新导入镜像，传参表示已有镜像分发到指定机房
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像Id，不传参表示新导入镜像，传参表示已有镜像分发到指定机房
     *
     * @param string $imageId
     */
    public function setImageId($imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * ImageName: 镜像名称，不带镜像ID时必填
     *
     * @return string|null
     */
    public function getImageName()
    {
        return $this->get("ImageName");
    }

    /**
     * ImageName: 镜像名称，不带镜像ID时必填
     *
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->set("ImageName", $imageName);
    }

    /**
     * UFileUrl: UFile镜像文件下载地址，不带镜像ID时必填
     *
     * @return string|null
     */
    public function getUFileUrl()
    {
        return $this->get("UFileUrl");
    }

    /**
     * UFileUrl: UFile镜像文件下载地址，不带镜像ID时必填
     *
     * @param string $uFileUrl
     */
    public function setUFileUrl($uFileUrl)
    {
        $this->set("UFileUrl", $uFileUrl);
    }

    /**
     * OsType: 操作系统平台，linux、windows(当前版本暂不支持windows)，不带镜像ID时必填
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统平台，linux、windows(当前版本暂不支持windows)，不带镜像ID时必填
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * Format: 镜像格式，可选RAW、qcow2， 不带镜像ID时必填
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->get("Format");
    }

    /**
     * Format: 镜像格式，可选RAW、qcow2， 不带镜像ID时必填
     *
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->set("Format", $format);
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


}
