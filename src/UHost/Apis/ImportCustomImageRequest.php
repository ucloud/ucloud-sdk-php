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
namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class ImportCustomImageRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ImportCustomImage"]);
        $this->markRequired("Region");
        $this->markRequired("ImageName");
        $this->markRequired("UFileUrl");
        $this->markRequired("OsType");
        $this->markRequired("OsName");
        $this->markRequired("Format");
        $this->markRequired("Auth");
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
    public function setRegion($region)
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
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
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
     * UFileUrl: UFile私有空间地址
     *
     * @return string|null
     */
    public function getUFileUrl()
    {
        return $this->get("UFileUrl");
    }

    /**
     * UFileUrl: UFile私有空间地址
     *
     * @param string $uFileUrl
     */
    public function setUFileUrl($uFileUrl)
    {
        $this->set("UFileUrl", $uFileUrl);
    }

    /**
     * OsType: 操作系统平台，比如CentOS、Ubuntu、Windows、RedHat等，请参考控制台的镜像版本；若导入控制台上没有的操作系统，参数为Other
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->get("OsType");
    }

    /**
     * OsType: 操作系统平台，比如CentOS、Ubuntu、Windows、RedHat等，请参考控制台的镜像版本；若导入控制台上没有的操作系统，参数为Other
     *
     * @param string $osType
     */
    public function setOsType($osType)
    {
        $this->set("OsType", $osType);
    }

    /**
     * OsName: 操作系统详细版本，请参考控制台的镜像版本；OsType为Other时，输入参数为Other
     *
     * @return string|null
     */
    public function getOsName()
    {
        return $this->get("OsName");
    }

    /**
     * OsName: 操作系统详细版本，请参考控制台的镜像版本；OsType为Other时，输入参数为Other
     *
     * @param string $osName
     */
    public function setOsName($osName)
    {
        $this->set("OsName", $osName);
    }

    /**
     * Format: 镜像格式，可选RAW、VHD、VMDK、qcow2
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->get("Format");
    }

    /**
     * Format: 镜像格式，可选RAW、VHD、VMDK、qcow2
     *
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->set("Format", $format);
    }

    /**
     * Auth: 是否授权。必须填true
     *
     * @return boolean|null
     */
    public function getAuth()
    {
        return $this->get("Auth");
    }

    /**
     * Auth: 是否授权。必须填true
     *
     * @param boolean $auth
     */
    public function setAuth($auth)
    {
        $this->set("Auth", $auth);
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


}
